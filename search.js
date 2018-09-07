var content = "";
var inNew = getCookie("inNew");
var searcher = getCookie("searcher");
$(document).ready(function () {
    //默认搜索引擎
    if (searcher == "") {
        setSearcher("google");
    } else {
        setSearcher(searcher);
    }

    //是否在新窗口打开
    if (inNew != "") {
        if (inNew == "true") {
            $("#inNew").attr("checked", "true");
        } else {
            $("#inNew").removeAttr("checked");
        }
    }
    setInNew();
});


$("#searchselect").change(function () {
    setSearcher($("#searchselect").val());
})

$("#inNew").change(function () {
    setInNew();
})

$("#content").keypress(function (event) {
    if (event.keyCode == '13') {
        $("#" + searcher).trigger("click");
    }
});


$("#baidu").click(function () {
    getcontent();
    window.open("http://www.baidu.com/s?wd=" + content, inNew);
});
$("#google").click(function () {
    getcontent();
    window.open("http://www.google.com/search?q=" + content, inNew);
});
$("#sogou").click(function () {
    getcontent();
    window.open("https://www.sogou.com/web?query=" + content, inNew);
});
$("#bing").click(function () {
    getcontent();
    window.open("http://cn.bing.com/search?q=" + content, inNew);
});
$("#zhihu").click(function () {
    getcontent();
    window.open("https://www.zhihu.com/search?q=" + content, inNew);
});


$("#Github").click(function () {
    getcontent();
    window.open("https://github.com/search?utf8=%E2%9C%93&q=" + content + "&type=", inNew);
});
$("#jd").click(function () {
    getcontent();
    window.open("http://search.jd.com/Search?enc=utf-8&keyword=" + content, inNew);
});
$("#taobao").click(function () {
    getcontent();
    window.open("https://s.taobao.com/search?q=" + content, inNew);
});

//获取url中的参数
function getUrlParam(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return decodeURI(r[2]);
    return null;
}

//获取输入框内容
function getcontent() {
    content = encodeURIComponent($("#content").val());
}

//设置名为cname值为cvalue存活期为exdays天的cookie
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

//获取名为cname的cookie值
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}


//设定是否在新窗口中打开
function setInNew() {
    setCookie("inNew", $("#inNew").is(':checked'), 30);
    inNew = $("#inNew").is(':checked') ? "_blank" : "_self";
}

//设置默认搜索引擎
function setSearcher(value) {
    searcher = value;
    $("#searchselect").val(value);
    setCookie("searcher", value, 30);
}