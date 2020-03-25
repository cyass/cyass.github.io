<?php
$conf['qqjump'] = 1;
if (strpos($_SERVER['HTTP_USER_AGENT'], 'QQ/') !== false && $conf['qqjump'] == 1) {
    $siteurl = 'http://mz.iisky.cc' . $_SERVER['SERVER_NAME']  . $_SERVER["REQUEST_URI"];
  
  //  带端口的 
  //  $siteurl = 'http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
  
  
    echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>请使用浏览器打开</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
        <meta content="black" name="apple-mobile-web-app-status-bar-style" />
        <meta name="format-detection" content="telephone=no" />
        <meta content="false" name="twcClient" id="twcClient" />
        <meta name="aplus-touch" content="1" />
        <style>
            body,
            html {
                width: 100%;
                height: 100%
            }

            * {
                margin: 0;
                padding: 0
            }

            body {
                background-color: #fff
            }

            .top-bar-guidance {
                font-size: 15px;
                color: #fff;
                height: 70%;
                line-height: 1.8;
                padding-left: 20px;
                padding-top: 20px;
                background: url(//gw.alicdn.com/tfs/TB1eSZaNFXXXXb.XXXXXXXXXXXX-750-234.png) center top/contain no-repeat
            }

            .top-bar-guidance .icon-safari {
                width: 25px;
                height: 25px;
                vertical-align: middle;
                margin: 0 .2em
            }

            .app-download-tip {
                margin: 0 auto;
                width: 300px;
                text-align: center;
                font-size: 15px;
                color: #2466f4;
                background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAcAQMAAACak0ePAAAABlBMVEUAAAAdYfh+GakkAAAAAXRSTlMAQObYZgAAAA5JREFUCNdjwA8acEkAAAy4AIE4hQq/AAAAAElFTkSuQmCC) left center/auto 15px repeat-x
            }

            .app-download-tip .guidance-desc {
                background-color: #fff;
                padding: 0 5px
            }

            .app-download-btn {
                display: block;
                width: 214px;
                height: 40px;
                line-height: 40px;
                margin: 18px auto 0 auto;
                text-align: center;
                font-size: 18px;
                color: #2466f4;
                border-radius: 20px;
                border: .5px #2466f4 solid;
                text-decoration: none
            }
            
             #browser img{ width:50px; }
             #browser{ margin: 0px 5px;text-align:center; }
        </style>
    </head>
    <body>
        <script id="mob" type="text/javascript" charset="utf-8" src=""></script>     <div class="top-bar-guidance">
            <p>点击右上角<img src="http://gw.alicdn.com/tfs/TB1xwiUNpXXXXaIXXXXXXXXXXXX-55-55.png" class="icon-safari" /> <span id="openm">Safari打开</span></p>
            <p>可以继续浏览本站哦~</p>
        </div>
        <div id="browser">
            <a href="mttbrowser://url='. $siteurl .'"><img src="http://wx3.sinaimg.cn/mw690/0060lm7Tly1g019l1s0o0j3074074t9r.jpg"></img></a>
            <a href="googlechrome://browse?url='. $siteurl .'"><img src="http://wx3.sinaimg.cn/mw690/0060lm7Tly1g019l1zpavj3074074tax.jpg"></img></a>
            <a href="alipays://platformapi/startapp?appId=20000067&url='. $siteurl .'"><img src="http://wx4.sinaimg.cn/mw690/0060lm7Tly1g019l1rqdbj3074074gmp.jpg"></img></a>
            <a href="googlechrome://browse?url='. $siteurl .'"><img src="http://wx2.sinaimg.cn/mw690/0060lm7Tly1g019l1rjw5j3074074dfy.jpg"></img></a>
            <a href="ucbrowser://'. $siteurl .'"><img src="http://wx4.sinaimg.cn/mw690/0060lm7Tly1g019l1snd3j3074074gnv.jpg"></img></a>
            <a href="bdbrowser://'. $siteurl .'"><img src="http://wx1.sinaimg.cn/mw690/0060lm7Tly1g019v4k8vkj307407440t.jpg"></img></a>
        </div>
        <div class="app-download-tip">
            <span class="guidance-desc">点击图标或者复制网址通过其他浏览器打开</span>
        </div>

        <button data-clipboard-text="'.$siteurl.'" class="app-download-btn" id="J_BtnDowanloadApp">点此复制本站网址</button>
        <script src="http://lib.baomitu.com/clipboard.js/1.7.1/clipboard.min.js"></script>
        <script src="http://open.mobile.qq.com/sdk/qqapi.js?_bid=152"></script>
        <script>
            if (navigator.userAgent.indexOf("Android") > -1) {
                document.getElementById("openm").innerHTML = "浏览器打开";
            }
            if (navigator.userAgent.indexOf("QQ/") > -1) {
                mqq.ui.openUrl({
                    target: 2,
                    url: window.location.href
                });
            } else if (navigator.userAgent.indexOf("MicroMessenger") > -1) {
                if (navigator.userAgent.indexOf("Android") > -1) {
                    var iframe = document.createElement("iframe");
                    iframe.style.display = "none";
                    iframe.src = "?open=1";
                    document.body.appendChild(iframe);
                }
            }
            var clipboard = new Clipboard("#J_BtnDowanloadApp");
            clipboard.on("success", function(e) {
                document.getElementById("J_BtnDowanloadApp").innerHTML = "复制成功";
            });
            clipboard.on("error", function(e) {
                alert("复制失败，请点击右上角用浏览器打开");
            });
        </script>
<!--?php -->
    </body>
</html>
';
    exit;
}
?>
';<!DOCTYPE html>
<php>
    <title>已启用新域名 - 〆、灬执念 秒赞网mz.iisky.cc</title>
    <meta name=description content="〆、灬执念 秒赞网mz.iisky.cc">
    <meta name=keywords content="〆、灬执念 秒赞网mz.iisky.cc">
    <meta charset="UTF-8">
    <!--[if IE 8]>
        <style>.ie8 .alert-circle,.ie8 .alert-footer{display:none}.ie8 .alert-box{padding-top:75px}.ie8 .alert-sec-text{top:45px}</style>
    <![endif]-->
    <style>body{margin:0;padding:0;background:#E6EAEB;font-family:Arial,'微软雅黑','宋体',sans-serif}a{text-decoration: none}.alert-box{display:none;position:relative;margin:96px auto 0;padding:180px 85px 22px;border-radius:10px 10px 0 0;background:#FFF;box-shadow:5px 9px 17px rgba(102,102,102,0.75);width:286px;color:#FFF;text-align:center}.alert-box p{margin:0}.alert-circle{position:absolute;top:-50px;left:111px}.alert-sec-circle{stroke-dashoffset:0;stroke-dasharray:735;transition:stroke-dashoffset 1s linear}.alert-sec-text{position:absolute;top:11px;left:190px;width:76px;color:#000;font-size:68px}.alert-sec-unit{font-size:34px}.alert-body{margin:35px 0}.alert-head{color:#242424;font-size:28px}.alert-concent{margin:25px 0 14px;color:#7B7B7B;font-size:18px}.alert-concent p{line-height:27px}.alert-btn{display:block;border-radius:10px;background-color:#4AB0F7;height:55px;line-height:55px;width:286px;color:#FFF;font-size:20px;text-decoration:none;letter-spacing:2px}.alert-btn:hover{background-color:#6BC2FF}.alert-footer{margin:0 auto;height:42px;width:120px}.alert-footer-icon{float:left}.alert-footer-text{float:left;border-left:2px solid #EEE;padding:3px 0 0 5px;height:40px;color:#0B85CC;font-size:12px;text-align:left}.alert-footer-text p{color:#7A7A7A;font-size:22px;line-height:18px}</style>
    </head> 
    <body class="ie8">
        <div id="js-alert-box" class="alert-box">
            <svg class="alert-circle" width="234" height="234">
                <circle cx="117" cy="117" r="108" fill="#FFF" stroke="#43AEFA" stroke-width="17">
                </circle>
                <circle id="js-sec-circle" class="alert-sec-circle" cx="117" cy="117" r="108" fill="transparent" stroke="#F4F1F1" stroke-width="18" transform="rotate(-90 117 117)">
                </circle>
                <text class="alert-sec-unit" x="82" y="172" fill="#BDBDBD">Cool</text>
            </svg>
            <div id="js-sec-text" class="alert-sec-text">
            </div>
            <div class="alert-body">
                <div id="js-alert-head" class="alert-head">
                </div>
                <div class="alert-concent">
                    <p>
                        <a href="http://www.12580sky.com" style="color:#4AB0F7;font-size:28px">mz.iisky.cc</a>
                    </p>
                    <br>
                
                </div>
                <a id="js-alert-btn" class="alert-btn" href="javascript:top.location.href='http://mz.iisky.cc';">立即进入</a>
            </div>

        </div>
        <script>function alertSet(e) {
                document.getElementById("js-alert-box").style.display = "block",
                document.getElementById("js-alert-head").innerHTML = e;
                var t = 30,
                n = document.getElementById("js-sec-circle");
                document.getElementById("js-sec-text").innerHTML = t,
                setInterval(function() {
                    if (0 == t) top.location.href = 'http://mz.iisky.cc';
                    else {
                        t -= 1,
                        document.getElementById("js-sec-text").innerHTML = t;
                        var e = Math.round(t / 30 * 735);
                        n.style.strokeDashoffset = e - 735
                    }
                },  
                970);
            }</script>
    </body>

</html>
<script>alertSet('已启用新域名');</script>
<script type="text/javascript">function clickIE4() {
        if (event.button == 2) {
            return false
        }
    }
    function clickNS4(e) {
        if (document.layers || document.getElementById && !document.all) {
            if (e.which == 2 || e.which == 3) {
                return false
            }
        }
    }
    function OnDeny() {
        if (event.ctrlKey || event.keyCode == 78 && event.ctrlKey || event.altKey || event.altKey && event.keyCode == 115) {
            return false
        }
    }
    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS4;
        document.onkeydown = OnDeny()
    } else if (document.all && !document.getElementById) {
        document.onmousedown = clickIE4;
        document.onkeydown = OnDeny()
    }
    document.oncontextmenu = new Function("return false");</script>
<php/>

