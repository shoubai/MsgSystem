$(function () {
    $("#sendbtn").click(function () {
        var content = $("#content").val();
        if (!content) {
            alert("请输入聊天内容");
        }
        $.ajax({
            url: 'chartAdd.php',
            type: 'POST',
            dataType: 'json',
            data: {
                co: content
            },
            success: function (data) {
                if (data.code == 1) {
                    $("#content").val('');
                    getMsg();
                } else {
                    alert('失败: ', data.msg);
                }
            },
            error: function () {
                alert("系统错误");
            }
        })
    })
    getMsg();
})

function getMsg() {
    $.ajax({
        url: 'chartList.php',
        type: 'POST',
        dataType: 'json',
        success: function (data) {
            if (data.code == 1) {
                let str = '';
                console.log(data.list);
                for (const item of data.list) {
                    str += `<div>${item.content}</div>`;
                }
                //在showmsg标签后面添加str这句话，使用html
                $("#showmsg").append(str);
            }
        }
    })
}