$(function(){
    $("#sendbtn").click(function(){
        var content = $("#content").val();
        if(!content){
            alert("请输入聊天内容");
        }
        $.ajax({
            url:'chart_add.php',
            type:'POST',
            dataType:'json',
            data:{co:content},
            success:function(data){
                if(data.code == 1){
                    $("#content").val('');
                    alert('成功');
                }else{
                    alert('失败: ',data.msg);

                }
            },
            error:function(){
                alert("系统错误");
            }
        })
    })
})