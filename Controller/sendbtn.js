$(function () {
    $("#sendbtn").click(function () {
        var content = $("#content").val();
        if (!content) {
            alert("请输入聊天内容");
        }
        $.ajax({
            url: '../Controller/chartAdd.php',
            type: 'POST',
            dataType: 'json',
            data: {
                co: content
            },
            success: function (data) {
                if (data.code == 1) {
                    $("#content").val('');
                } else {
                    alert('失败: ', data.msg);
                }
            },
            error: function () {
                alert("系统错误");
            }
        })
    })
    //getMsg();
    //假如时间设置太短 将很容易重复
    timer = setInterval(getMsg, 2000);
})

function getMsg() {
    $.ajax({
        url: '../Controller/chartList.php',
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                let list  = data.list;
                // console.log(data.list)
                for(let i in list){
                    if(list[i].uid == test){
                            str = '<div style="text-align:right">' + list[i].addtime + list[i].nickname + '<br/>' + list[i].content + '<div>';
                            $("#showmsg").append(str);
                    }
                    else{
                        // console.log(list[i].content);
                        str = '<div>' + list[i].addtime + list[i].nickname + '<br/>' + list[i].content + '</div>';
                        //在showmsg标签后面添加str这句话，使用html
                        $("#showmsg").append(str);
                } 
            }
                let userlist = data.userlist;
                for(let j in userlist){
                    
            }
        }}
    })
}

