/**
 * 填充下拉菜单
 * @param pcode 父级code
 * @param dom 填充id
 * @param value 默认值
 * @param isAll 是否显示全部
 */
function fillSelectServer(pcode,dom,value,isAll) {
    $.ajax({
        url:ctx + "/api/dict/getMenusByCode",
        data:{"pcode":pcode},
        success:function (rep) {
            var data = JSON.parse(rep);
            var html = '';
            if (isAll){
                html += '<option value="">全部</option>';
            }
            $.each(data,function (k, v) {
                html += '<option value="'+v.id+'">'+v.name+'</option>';
                if (v.items != ''){
                    $.each(v.items,function (a, b) {
                        html += '<option value="'+b.id+'">--'+b.name+'</option>';
                        if (b.items != ''){
                            $.each(b.items,function (a, b) {
                                html += '<option value="'+b.id+'">----'+b.name+'</option>';
                            });
                        }
                    });
                }
            });
            $("#"+dom).html(html);
            if (value){
                $("#"+dom+" option[value='"+value+"']").attr("selected","selected");
            }
        },error:function (e) {
            console.log(e.toString());
        }


    });
}