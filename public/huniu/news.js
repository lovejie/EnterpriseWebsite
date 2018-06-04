
var items = getItemsByPcode("news");
fillNewsType(items);
function fillNewsType(items){
    var html = '';
    $.each(items,function (k,v) {
    html += '<li><a href="'+ctx+v.href+'">'+v.name+'</a></li>'
    })
    $("#news-type").html(html);
}

