<?php
$text = $_POST["text"];
if ($text == "") {
    header('Location: https://correctjp.epizy.com');
}
$right = array("あなた","貴","し","ぶ","で","応","ス","雑",'貨','見',"潰","め","キ","ぞ","舐","絶","対","得","溜","達","jp","NHK","XPERIA","円","LINEpay","PayPay","Twitter","ツイッター","instagram","インスタ","ライン","LINE","line","風","なさい","強","東京","シリコンバレー","google","グーグル","Google","スカイツリー","SKY TREE","TOKYO","ハ","amazon","アマゾン","乘","黑","snapdragon","SD","PUBG","労働","ラーメン","🇯🇵","🇰🇷","🇺🇸","🇬🇧","🇷🇺","🇩🇪","🇮🇳","🇿🇦","🇧🇷","オ");
$correct = array("貴様","贵","レ","ふ","て",'应','ヌ','杂',"货","见","溃","ぬ","ギ","そ","舐","绝","对","慧","贮","们","cn","CCTV","HUAWEI","人民元","alipay","WechatPay","weibo","ウェイボ","Tiktok","Tiktok","wechat","wechat","wechat","风","(しなさい)","强","深圳","深圳","百度","百度","百度","上海中心","shanghai tower","上海","八゜","亚马逊","亚马逊","乘","黑","Kirin","NM","荒野行動","極度勞動","うーメソ","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","才");
$nright = str_replace($right,$correct,$text);
?>
<head>
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<!-- As a link -->
<nav class="navbar" style="background-color: #2A2D31;">
  <a class="navbar-brand" style="color: #ffffff;" href="#">怪しい日本語ジェネレーター</a>
</nav>
<textarea style="position: relative; width: 100%; height: 100%;"><?php echo $nright; ?></textarea>

<button type="button" class="btn btn-outline-primary" style="position: fixed; text-align: center; left: 50%; right: 50%; transform: translate(-50%, -50%); z-index: 30; top: 80%; text-align: center;">コピーする</button>
</body>