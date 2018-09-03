<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Work System</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="style.css" type="text/css" />

	<script type="text/javascript" src="jquery/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="chat.js"></script>
	<script type="text/javascript">

        // ask user for name with popup prompt
        var name = "Test";

        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "Guest";
    	}

    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");

    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");

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
    <script>
    (function(d, w, c) {
        w.ChatraID = 'xu4Z75tTTjupBN5Zy';
        var s = d.createElement('script');
        w[c] = w[c] || function() {
            (w[c].q = w[c].q || []).push(arguments);
        };
        s.async = true;
        s.src = 'https://call.chatra.io/chatra.js';
        if (d.head) d.head.appendChild(s);
    })(document, window, 'Chatra');
</script>

	<style type="text/css">
a {
	color: white;
	font-size: 120%;
}

#accordion {
	width: 400px;
	height: 600px;
	float: right;
	padding-right: 50px;
	padding-top: 20px;
}

#chat-area {
	background: grey;
}

#sendie {
	background: grey;
}

#setsearch {
	padding-right: 100px;
}

p {
	color: white;
}
</style>
</head>

<body onload="setInterval('chat.update()', 1000)">



	<ul class="nav nav-tabs col-md-12">
		<li role="presentation" class="active"><a
			href="https://www.do1024.com" target="_blank">DO 1024</a></li>
		<li role="presentation"><a href="https://pan.do1024.com"
			target="_blank">Cloud Disc</a></li>
		<li role="presentation"><a href="https://cybozulive.com"
			target="_blank">CybozuLive</a></li>
		<li role="presentation"><a href="https://caica.cybermail.jp"
			target="_blank">CYBERMAIL</a></li>
		<li role="presentation"><a href="http://172.21.0.50"
			target="_blank">Cybozu Office</a></li>
        <li role="presentation"><a href="http://172.21.0.63/webmenu30/Pages/Common/MainFrame.aspx"
			target="_blank">Keihi</a></li>
        <li role="presentation"><a href="http://www.runoob.com/"
			target="_blank">RUNNOOB</a></li>
		<li role="presentation"><a
			href="http://104.224.161.30:8888/login" target="_blank">BT Linux</a></li>
		<li role="presentation"><a
			href="https://bandwagonhost.com/aff.php?aff=31529" target="_blank">Bandwagon</a></li>
		<li role="presentation"><a href="http://lackar.com/aa/"
			target="_blank">AA</a></li>
        <li role="presentation"><a href="https://tool.lu/"
            target="_blank">Tools</a></li>


		<form class="navbar-form navbar-right" role="search" id="setsearch">


			<label for="inNew"><p>在新窗口中打开</p></label> <input id="inNew"
				type="checkbox" checked="checked" /> &nbsp;&nbsp; <label
				for="searchselect"><p>默认搜索引擎</p></label> <select id="searchselect"
				onchange="" class="form-control">
				<option value="google">谷歌</option>
				<option value="baidu">百度</option>
				<option value="sogou">搜狗</option>
				<option value="bing">必应</option>
				<option value="googlem">谷歌镜像</option>
			</select>

		</form>

	</ul>





	<form onsubmit="return false">
		<div class="row clearfix">
			<div class="col-md-2 column"></div>
			<div class="col-md-8 column text-center"
				style="margin: 5px;5px;5px;5px;">
				<div class="form-group">
					<input type="text" class="form-control  input-lg"
						placeholder="输入要搜索的内容" id="content" name="content" />
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
					<button type="button" id="jd" class="btn btn-danger">京东</button>
					<button type="button" id="taobao" class="btn btn-warning">淘宝</button>
				</div>
			</div>
		</div>
	</form>


	<div id="accordion">
		<a data-toggle="collapse" data-parent="accordion" href="#collapse"
			id="hide"> Need Some Help</a>
		<div id="collapse" class="collapse in>
    <div id="page-wrap">

			<h2>Work System</h2>

			<p id="name-area"></p>

			<div id="chat-wrap">
				<div id="chat-area"></div>
			</div>

			<form id="send-message-area">
				<p>Need Help</p>
				<textarea id="sendie" maxlength='80'></textarea>
			</form>

		</div>
	</div>
	</div>
</body>
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
                    window.open("https://github.com/search?utf8=%E2%9C%93&q="+content+"&type=", inNew);
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
                    if (r != null) return decodeURI(r[2]); return null;
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