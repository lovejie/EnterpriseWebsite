
/**
 * 菜单列表全局变量
 * @type {null}
 */
var menudata = null;
var _token = $('meta[name="csrf_token"]').attr('content');
$.ajax({
    url:ctx+"/api/menu/list",
    type:"post",
    data:{"_token":_token},
    async:false,
    success:function (rep) {
        menudata  = JSON.parse(rep);
        var html = '';
    // class="current-menu-item"
        $.each(menudata,function (k,v) {
            html += '<li><a href="'+formatUrl(v.href)+'"><span>'+v.name+'</span></a>';
            if(v.items != ''){
                html += '<div class="child-box">'+
                    '<div class="child-box2">'+
                    '<dl class="sub-menut">';
                $.each(v.items,function (a,b) {

                    html += '<dt><a href="'+formatUrl(b.href)+'"><span>'+b.name+'</span></a></dt>'
                });
                html += '</dl>'+
                    '<div class="blank10"></div>'+
                    '</div>' +
                    '</div>';
            }
            html += '</li>';
        });

        $("#menu-topnav").html(html);
    },
    error:function (e) {
    console.log(e);
}
});

/**
 * 根据父级code查询元素
 * @param pcode
 * @returns {*}
 */
function getItemsByPcode(pcode) {
    var items = null;
    $.each(menudata,function (k,v) {
        if (v.code == pcode) {
            items = v.items;
        }
    })
    return items;
    
}
/**
 * 格式化URL
 * @param pcode
 * @returns {*}
 */
function formatUrl(url) {

    if (url.indexOf("http://")){
        return url;
    }
    if (url.indexOf("https://")){
        return url;
    }
    url = ctx + url;
    return url;

}