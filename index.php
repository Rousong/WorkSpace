<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Work Space</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
 
<!-- 可选的Bootstrap主题文件（一般不使用） -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
 
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
 
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="chat.js"></script>
    <script type="text/javascript" src="search.js"></script>
    

</head>

<body onload="setInterval('chat.update()', 1000)">

<!--定义一个导航栏-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

    <!--标题头，字体会大一些-->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse"><span class="sr-only">切换导航</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span></button>
        <a class="navbar-brand" href="https://www.do1024.com">DO1024</a></div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <!-- <ul class="nav nav-tabs nav-justified">-->
        <ul class="nav navbar-nav">
            <li role="presentation"><a href="https://pan.do1024.com"
                                       target="_blank">Cloud Disc</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> 会社<span
                    class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li role="presentation"><a href="https://cybozulive.com"
                                               target="_blank">CybozuLive</a></li>
                    <li role="presentation"><a href="https://caica.cybermail.jp"
                                               target="_blank">CYBERMAIL</a></li>
                    <li role="presentation"><a href="http://172.21.0.50"
                                               target="_blank">Cybozu Office</a></li>
                    <li role="presentation"><a href="http://172.21.0.63/webmenu30/Pages/Common/MainFrame.aspx"
                                               target="_blank">経費申請</a></li>
                </ul>
            </li>
            <li role="presentation"><a href="http://www.runoob.com/"
                                       target="_blank">菜鸟教程</a></li>
            <li role="presentation"><a
                    href="http://104.224.161.30:8888/login" target="_blank">BT Linux</a></li>
            <li role="presentation"><a
                    href="https://bandwagonhost.com/aff.php?aff=31529" target="_blank">Bandwagon</a></li>
            <li role="presentation"><a href="http://lackar.com/aa/"
                                       target="_blank">AA</a></li>
            <li role="presentation"><a href="https://tool.lu/"
                                       target="_blank">Tools</a></li>
        </ul>
    </div>
    <form onsubmit="return false">
        <div class="col-md-12" style="margin: auto">
            <div class="col-md-2 column"></div>
            <div class="col-md-8 column text-center">
                <div class="form-group">
                    <input type="text" class="form-control  input-lg"
                           placeholder="输入要搜索的内容" id="content" name="content"/>
                </div>
            </div>
            <div class="col-md-2 column"></div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column text-center">
                <div>
                    <button type="button" id="baidu" class="btn btn-primary">百度</button>
                    <button type="button" id="google" class="btn btn-info">谷歌</button>
                    <button type="button" id="sogou" class="btn btn-danger">搜狗</button>
                    <button type="button" id="bing" class="btn btn-success">必应</button>
                    <button type="button" id="zhihu" class="btn btn-info">知乎</button>
                    <button type="button" id="Github" class="btn btn-success">Github</button>
                </div>
            </div>
        </div>
    </form>
</nav>

<div style="padding-top: 200px">

    <div id="page-wrap">

        
        <p style="color: white">我是</p>
        <input type="text" id="myname" value="无名游客" class="form-control display:inline" style="width: auto"><button type="button" class="btn btn-success" id="getMyname" style="width:20% ">更新名字</button>
        

        <p id="name-area"></p>

        <div id="chat-wrap"><div id="chat-area"></div></div>

        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength = '100' ></textarea>
        </form>

    </div>
    </div>

</body>
<script type="text/javascript">
 //var name = prompt("Enter your chat name:", "Guest");

  //初始名字为"无名游客"
          var name="无名游客";
  //从input栏获取名字的值为用户的名字
         $(function(){
          $("#getMyname").click(function(){

            name= $("#myname").val();

           // 如果不填名字 默认为"我是傻逼"
      if (!name || name === '') {
         name = "我是傻逼";
      }

             name = name.replace(/(<([^>]+)>)/ig,"");

      // 把名字显示在浏览器里
      $("#name-area").html("你是: <span>" + name + "</span>");
          })


         });
    
       
      

      // strip tags
     

      // kick off chat
        var chat =  new Chat();
      $(function() {

         chat.getState();

         // watch textarea for key presses
             $("#sendie").keydown(function(event) {

                 var key = event.which;

                 //all keys including return.
                 if (key >= 33) {

                     var maxLength = $(this).attr("maxlength");
                     var length = this.value.length;

                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {
                         event.preventDefault();
                     }
                  }
                                                                                                        });
         // watch textarea for release of key press
         $('#sendie').keyup(function(e) {

            if (e.keyCode == 13) {

                    var text = $(this).val();
            var maxLength = $(this).attr("maxlength");
                    var length = text.length;

                    // send 
                    if (length <= maxLength + 1) {

                  chat.send(text, name);
                  $(this).val("");

                    } else {

              $(this).val(text.substring(0, maxLength));

            }


            }
             });

      });
    </script>
    <script type="text/javascript">
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
</script>
</html>