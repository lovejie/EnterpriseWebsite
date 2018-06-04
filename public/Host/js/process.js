/* CloudGoing loadScript Module Cached. */

function sendVerificationCode(vType, vAction, exData, btnObj) {
    processing('正在处理，请稍候...');
    var delay = 0;
    var cmd = 'close';
    $.get('/process.aspx?c=sendvcode&vt=' + vType + '&va=' + vAction + '&' + exData + '&' + new Date(), function (rdata) {
        var rmsg = rdata.split('|');
        if (rmsg[0] == "0") {
            rdata = '您的验证码已经发送成功！如果3分钟内没有收到验证码，请尝试重发！';
            delay = 3000;
            resendCountDown(60, btnObj, $(btnObj).val());
        } else if (rmsg[0] == "-1") {
            switch (rmsg[1]) {
                case "Invalid username or email": rdata = "请输入正确的用户名或邮箱地址！"; break;
                case "Mobile is not verified": rdata = "您的手机号码还未通过短信验证！"; break;
                case "Email is not verified": rdata = "您的电子邮箱地址还未通过验证！"; break;
                case "Email vCode disabled": rdata = "邮件验证功能已禁用！"; break;
                case "SMS vCode disabled": rdata = "短信验证功能已禁用！"; break;
                case "Time limited": rdata = "每分钟只能发送一次验证码！"; break;
                case "Invalid vtype": rdata = "无效的验证码请求方式！"; break;
                case "Invalid action": rdata = "无效的验证码请求动作！"; break;
                case "Invalid email": rdata = "您输入的电子邮件地址不正确！"; break;
                case "Invalid mobile": rdata = "您输入的手机号码不正确！"; break;
                case "Email exists": rdata = "您输入的电子邮件地址已经存在！"; break;
                case "Mobile exists": rdata = "您输入的手机号码已经存在！"; break;

                default: rdata = rmsg[1]; break;
            }
        }
        showResults(rdata, delay, cmd);
    });
}

function resendCountDown(cTime, btnObj, yBtnValue) {
    var obj = $(btnObj);
    if (cTime < 1) {
        obj.removeAttr("disabled");
        obj.val(yBtnValue);
    } else {
        obj.attr("disabled", "disabled");
        obj.val("(" + cTime.toString() + ")秒后可重发");
        cTime--;
        setTimeout(function () { resendCountDown(cTime, btnObj, yBtnValue) }, 1000);
    }
}

function getCouponError(rmsg, code) {
    var rdata = rmsg[1];
    switch (rmsg[1]) {
        case "Invalid coupon code": rdata = '您输入的优惠码无效！'; break;
        case "The coupon code is only use for monthly payment": rdata = '优惠码只能用于套餐的月付形式！'; break;
        case "Exceeds the limit": rdata = '您输入的优惠码已超过使用次数限制！'; break;
        case "Exceeds the per user limit": rdata = '当前优惠码每人只能使用' + rmsg[2] + '次！'; break;
        case "The coupon code is expired": rdata = '您输入的优惠码已过期！'; break;
        case "Current product is not allowed to use the coupon code": rdata = '当前产品套餐不允许使用优惠码！'; break;
        case "Your user group is not allowed to use the coupon code": rdata = '您的用户级别不允许使用优惠码！'; break;
        case "The coupon code is only use for " + rmsg[2] + " months payment": rdata = '优惠码仅能用于[' + rmsg[2] + ']个周期(月/天/小时)'; break;
        case "The coupon code is only use for amount more than": rdata = '优惠码仅能在总金额大于' + rmsg[2] + '的时候使用！'; break;
        case "The coupon code can not be used to order new services": rdata = '优惠码不能用于购买新产品服务！'; break;
        case "The coupon code can not be used to renew services": rdata = '优惠码不能用于续费产品服务！'; break;
        case "The coupon code can not be used to upgrade services": rdata = '优惠码不能用于升级产品服务！'; break;
        default: rdata = rmsg[1]; break;
    }
    rdata = rdata.replace('优惠码', '优惠码[<strong>' + code + '</strong>]');
    return rdata;
}

function applyCode(couponType) {
    clearCouponCode(0);
    var code = $("#couponcode").val();
    if (code == '') {
        $("#ccdes").html('请输入正确的优惠码！');
        return false;
    }
    $("#couponcode").val('Loading...');
    $.get('?c=ajax&dt=couponcode&p1=' + code + '&p2=' + couponType + '_' + productID + '_' + billingMothod + '_' + billingCycle + '_' + userData[0].utype + '_' + normalPrice.toFixed(2) + '&' + new Date(), function (rdata) {
        var rmsg = rdata.split('|');
        if (rmsg[0] == '0') {
            var fPrice = normalPrice;
            var couponConfig = $.parseJSON(rmsg[1]);
            var discount = parseFloat(couponConfig["discount"]);
            if (discount > 1) fPrice = fPrice - discount;
            else if (discount > 0 && discount < 1) fPrice = fPrice * discount;
            if (discount == 0) {
                $("#couponcode").val('');
                rdata = '当前产品不使用优惠码！';
            } else if (fPrice <= 0) {
                $("#couponcode").val('');
                rdata = '当前价格过低不能使用此优惠码！';
            } else {
                $("#suwin .finalPrice").html(fPrice.toFixed(2));
                $("#suwin .normalPrice").html('原始价格：<strike style="font-weight:bold;">' + normalPrice.toFixed(2) + '</strike> ' + userData[0].currency);
                $("#couponcode").val(code);
                rdata = couponConfig["cdes"];
            }
        }
        else {
            if (rmsg[0] == "-1") {
                rdata = getCouponError(rmsg, code);
            }
            $("#couponcode").val('');
        }
        $("#ccdes").html(rdata);
    });
}

function clearCouponCode(action) {
    $("#suwin .finalPrice").text(finalPrice.toFixed(2));
    $("#suwin .normalPrice").html('');
    $("#ccdes").html('');
    if (action == 1) $("#couponcode").val('');
}

function setAutorenew(serviceID, autorenew) {
    processing('正在' + (autorenew == '0' ? '启用' : '禁用') + '自动续费，请稍候...');
    var cmd = 'close';
    var delay = 1500;
    $.get('process.aspx?c=editservice&autorenew=' + autorenew + '&id=' + serviceID + '&' + new Date(), function (rdata) {
        var rs = rdata.split('|');
        if (rs[0] == '0') {
            rdata = '操作成功！';
        }
        else if (rs[0] == "-1") {
            switch (rs[1]) {
                case "Parameter error": rdata = "参数传递错误！"; break;
                case "No permission to Control this Service": rdata = '您没有控制此服务的权限！'; break;
            }
            delay = 0;
        }
        showResults(rdata, delay, cmd);
    });
}

function renew(serviceID, cycle, couponcode) {
    processing("正在续费，请稍候......");
    var delay = 0;
    cmd = '';
    $.get('process.aspx?c=renew&serviceid=' + serviceID + '&cycle=' + cycle + '&couponcode=' + couponcode + '&' + new Date(), function (rdata) {
        var rmsg = rdata.split('|');
        if (rmsg[0] == "0") {
            rdata = '续费成功！';
            delay = 2000;
            cmd = 'reload';
        }
        else if (rmsg[0] == "-1") {
            switch (rmsg[1]) {
                case 'Service not found': rdata = '您欲续费的产品服务并不存在！'; break;
                case 'Service does not support renewals': rdata = '您当前产品服务不支持续费操作！'; break;
                case 'Invalid payment cycle': rdata = '原付款周期或现付款周期有误！'; break;
                case 'Lack of balance': rdata = '您的余额不足于续费！'; break;
                case "Module price error": rdata = '计费模块错误！'; break;
                default: rdata = getCouponError(rmsg, couponcode); break;
            }
        }
        showResults(rdata, delay, cmd);
    });
}