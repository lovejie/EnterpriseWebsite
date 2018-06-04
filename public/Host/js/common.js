/// <reference path="/js/jquery.min.js" />

function rGet(cqstr, name) {
    if (cqstr == '') cqstr = location.search;
    name += '=';
    var value = cqstr.replace('?' + name, '&' + name);
    name = '&' + name;
    if (value.indexOf(name) > -1) {
        value = value.substring(value.indexOf(name) + name.length);
        if (value.indexOf('&') > -1) value = value.substring(0, value.indexOf('&'));
        if (value.indexOf('#') > -1) value = value.substring(0, value.indexOf('#'));
    } else value = '';
    return value;
}

String.prototype.replaceAll = function (s1, s2) {
    return this.replace(new RegExp(s1, "gm"), s2);
}

var curl = top.location.toString();
if (curl.indexOf("&rn=") > 0) curl = curl.substring(0, curl.indexOf("&rn="));
var cAction = rGet(curl, 'c');

function getUnixTime(time) {
    var yt = new Date(time * 1000);
    var nt = yt.getFullYear() + '-' + (yt.getMonth() + 1) + '-' + yt.getDate() + ' ' + yt.getHours() + ':' + yt.getMinutes() + ':' + yt.getSeconds();
    return nt;
}

function ajaxLoading(str) {
    if (str == undefined) str = 'Loading...';
    return '&nbsp;<br /><p style="text-align:center;line-height:30px;">' + str + '<br /><img src="/images/loading.gif" alt="Loading..."/></p>';
}

function processing(str) {
    $("#processing").html(ajaxLoading(str));
    $("#processing").dialog({ title: "", autoOpen: false, resizable: false,dialogClass:'unmntip',modal: true,close: function () {   
                 $('.unmntip').remove();   
            } }).dialog("open");
    
}

function showResults(str, delay, cmd) {
    $("#processing").html(str);
    switch (cmd) {
        case 'close':
            cmd = '$("#processing").dialog("close");';
            break;
        case 'reload':
            cmd = 'top.location.reload();';
            break;
    }
    if (delay > 0) setTimeout(cmd, delay);
}

function htmlEncode(html) {
    var temp = document.createElement("div");
    (temp.textContent != null) ? (temp.textContent = html) : (temp.innerText = html);
    var output = temp.innerHTML;
    temp = null;
    return output;
}

function htmlDecode(text) {
    var temp = document.createElement("div");
    temp.innerHTML = text;
    var output = temp.innerText || temp.textContent;
    temp = null;
    return output;
}

function getPrice(pprice, psconfig, pcycle) {
    var pstr = psconfig.pricedes == undefined ? '' : psconfig.pricedes;
    if (pstr == undefined) pstr = '';
    //if (pstr != '') alert(psconfig.pricedes);
    if (pstr == '') {
        var pps = pprice.cprice.split(',');
        var pcs = pprice.cycle.split(',');
        var p;
        var cps = '';
        for (p = 0; p < pps.length; p++) {
            if (pps[p] != '0') {
                cps = '<span>' + pps[p] + '</span>元/';
                switch (pcs[p]) {
                    case '1': cps += '月'; break;
                    case '3': cps += '季'; break;
                    case '6': cps += '半年'; break;
                    case '12': cps += '年'; break;
                    case '24': cps += '2年'; break;
                }
                if (parseInt(pcs[p]) == pcycle || (pcycle < 0 && pcycle == -(p+1))) {
                    pstr = cps;
                    break;
                }
                pstr += cps + '&nbsp;&nbsp;&nbsp;';
            }
        }

    }
    return pstr;
}

function checkDomain(obj) {
    var domainname = $(obj).find("input[name='domainname']").val(),
	    domainval="",
		gpid = $(obj).find("input[name='pgid']").val(),
		domaintype = $(obj).find("input[name='domaintype']").val(),
		_type=0;
	if(domaintype.indexOf("英文")<0){ _type=1; }
   	 
    if (domainname == '') {
        alert('请输入要查询的域名！');
        return false;
    }
 	   domainname = domainname.replace(/\s+/, ""); //去空格
	   domainname = domainname.replace(/www\./, "");
	   keyword = domainname.replace(/\.(\w*)$/, ""); //去前缀后缀
	var subKeyword = keyword.substring(0,4);
	   if(subKeyword == "xn--"){
		   alert(domainTipsRule);
		   domainname.focus();
		   return false;
	   }
	 
 	   if (getLen(keyword) > 63) {
		   alert("您输入的域名过长，请重新输入");
		   domainname.focus();
	       return false;
	   }   
	   if (IsEnDomain(keyword) == false && IsChDomain(keyword) == false) {
				   alert('不符合域名注册规则，请重新输入！ \n\n提示：域名可由英文字母（不区分大小写）、数字、"-"（中横线）构成，不能使用空格及特殊字符（如！、$、&、?等）；中文域名可含中文。"-"不能单独注册，不能放在开头或结尾。');
				   domainname.focus();
				   return false;
			   }  
 
 if(_type==0){
 	          if (!IsEnDomain(keyword)) {
				   alert(domaintype + "不支持中文");
				   domainname.focus();
				   return false;
			   }
			   var reg = new RegExp("^[a-zA-Z0-9][-a-zA-Z0-9]{0,62}$");
			   if (!reg.test(keyword)) {
				   alert(domaintype + "只能输入英文,数字和减号。");
				   domainname.focus();
				   return false;
			   }
 	 }
	 else{
		 if (!IsChDomain(keyword)) {
				   alert(domaintype + "必需包含中文");
				   domainname.focus();
				   return false;
			   }
 		 }
 	
    var domainsuffixs = $(obj).find("input[name='domainsuffix']:checked"),
	    domainval=domainsuffixs.val();
		 
    if (domainsuffixs.length < 1) {
        alert('请选择要查询的域名后缀！');
        return false;
    }
	 
    var str = '<div class="testid" testdate=""></div><ul class="do-search">';
    var dn, domains ='', pids ='';
    $(domainsuffixs).each(function (i) {
        dn = domainname + $(domainsuffixs[i]).val();
         pids += ',' + $(domainsuffixs[i]).attr('data-pid');
         domains += ',' + dn;
		 domainval+= ',' + $(domainsuffixs[i]).val();
        str += '<li class="r_' + dn.replaceAll("\\.", "") + '" dataval="'+$(domainsuffixs[i]).val()+'"><h3>' + dn + '</h3><div class="do-scon">正在查询...</div></li>';
    });
    str += '</ul>';
    swin.html(str);
    domainAPI(domains, gpid,domainval,pids);
    swin.dialog({ title: "域名查询", autoOpen: false,dialogClass:'unmntip-domain', resizable: false, width: 500, modal: true }).dialog("open");
    return false;
}

function domainAPI(domains,gpid,domainval,pids) {

    var _domains = domains.split(','),
	    _pids = pids.split(','),
 	    _domainval = domainval.split(',');
     if (_domains.length <= 0) return false;
    var rmsg ;
	var _class="";
  $(_domains).each(function(i) {
  $.getJSON("process.aspx?c=jsapi&action=domain&domain=" + _domains[i] + "&" + new Date(), function (rdata) {
       if (rdata.status == 'error') rmsg = rdata.msg;
       if (rdata.status == 'unavailable') { _class='do-er';rmsg = '不可注册';}
        else if (rdata.status == 'available'){
  	    _class='do-ok';
         rmsg = '<a href="javascript:placeOrder(0,\'idcSystem.aspx?c=order&ptype=3&pid='+_pids[i]+'&domain=' + _domains[i]+'\');" class="domain_yes">马上注册</a>';
  		}
         if (rmsg.indexOf('Error:') > -1) rmsg = rmsg.replace('Error:', '');
		$(".do-search").find('.r_' + _domains[i].replaceAll('\\.', '')).addClass(_class);
        $(".do-search").find('.r_' + _domains[i].replaceAll('\\.', '') + ' .do-scon').html(rmsg);
        i++;
     });   
});
 }

 function getLen(str) {
    var totallength = 0; for (var i = 0; i < str.length; i++) {
        var intCode = str.charCodeAt(i); if (intCode >= 0 && intCode <= 128) {
            totallength = totallength + 1; //非中文单个字符长度加 1
        }
        else {
            totallength = totallength + 2; //中文字符长度则加 2
        }
    } //end for  
    return totallength;
}
 
function encodeHtml(str) {
    var s = "";
    if (str.length == 0) return "";
    s = str.replace(/&/g, "&amp;");
    s = s.replace(/</g, "&lt;");
    s = s.replace(/>/g, "&gt;");
    s = s.replace(/ /g, "&nbsp;");
    s = s.replace(/\'/g, "&#39;");
    s = s.replace(/\"/g, "&quot;");
    //s = s.replace(/\n/g, "<br>");
    return s;
}	

function IsEnDomain(argValue)
{
		var flag1=false;
		var compStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-1234567890.";
		var length2=argValue.length;
		for (var iIndex=0;iIndex<length2;iIndex++)
			{
				var temp1=compStr.indexOf(argValue.charAt(iIndex));
				if(temp1==-1)
					{
						flag1=false;
						break;
					}
				else
					{
						flag1=true;
					}
			}
		return flag1;
}


//判断输入的是否为中文域名的函数
function IsChDomain(argString)
{
		var flag=false;
		var compStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-1234567890";
		var length1=argString.length;
		for(var chrIndex=0;chrIndex<length1;chrIndex++)
			{
				var temp=argString.charCodeAt(chrIndex)
				if(temp>=10000)
				{
					flag=true;
					break;
				}else
				{
					var temp1=compStr.indexOf(argString.charAt(chrIndex));
					if(temp1==-1)
					{
						flag=false;
						break;
					}
				}
			}
		return flag;
}