<?php
$app = $_GET["app"];
if (empty($_SERVER['HTTPS'])) {
    header("Location: https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
    exit;
}
?>
<head>
<title>怪しい日本語ジェネレーター</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="loading-bar.css"/>
<script type="text/javascript" src="loading-bar.js"></script>
<meta name="application-name" content="怪しい日本語ジェネレーター">
<meta name="author" content="CorrectJPweb-Orange">
<meta name="keywords" content="correctjp,怪しい日本語bot,怪しい日本語　変換,怪しい日本語">
<meta http-equiv="content-language" content="ja">
<meta name="twitter:card" content="Summary with Large Image" />
<meta name="twitter:site" content="@0_a_e" />
<meta name="description" content="贵樣の正レい日本语が怪レい日本语に變換されまず(しなさい）">
<meta property="og:site_name" content="怪しい日本語ジェネレーターWeb" />
<meta property="og:title" content="怪しい日本語ジェネレーターWeb" />
<meta property="og:type" content="website" />
<meta property="og:description" content="樣の正レい日本语が怪レい日本语に變換されまず(しなさい）" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
.top {
}
.loader {
  color: #55acee;
  font-size: 90px;
  text-indent: -9999em;
  overflow: hidden;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  margin: 72px auto;
  position: relative;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-animation: load6 1.7s infinite ease, round 1.7s infinite ease;
  animation: load6 1.7s infinite ease, round 1.7s infinite ease;
}
@-webkit-keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
}
@keyframes load6 {
  0% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  5%,
  95% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
  10%,
  59% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.087em -0.825em 0 -0.42em, -0.173em -0.812em 0 -0.44em, -0.256em -0.789em 0 -0.46em, -0.297em -0.775em 0 -0.477em;
  }
  20% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.338em -0.758em 0 -0.42em, -0.555em -0.617em 0 -0.44em, -0.671em -0.488em 0 -0.46em, -0.749em -0.34em 0 -0.477em;
  }
  38% {
    box-shadow: 0 -0.83em 0 -0.4em, -0.377em -0.74em 0 -0.42em, -0.645em -0.522em 0 -0.44em, -0.775em -0.297em 0 -0.46em, -0.82em -0.09em 0 -0.477em;
  }
  100% {
    box-shadow: 0 -0.83em 0 -0.4em, 0 -0.83em 0 -0.42em, 0 -0.83em 0 -0.44em, 0 -0.83em 0 -0.46em, 0 -0.83em 0 -0.477em;
  }
}
@-webkit-keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes round {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
</style>
</head>
<body>
<!-- As a link -->
<nav class="navbar" style="background-color: #2A2D31;" >
  <a class="navbar-brand" href="#" style="color: #ffffff;">怪しい日本語ジェネレーター</a>
</nav>

<div class="Logos" style="position: relative; margin-top: 30px;">
<h2 class="top" style="text-align: center; font-size: 28px;">怪レい日本语ジェネレーター</h2>
<h5 style="text-align: center;">贵様の正レい日本语を怪レい日本语に変換レ(しなさい)。</h5>
</div>
</br>
<p style="color: gray; text-align: center;">下に正レい日本语を入力レ(しなさい)。</p>
<div id="forms">
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"></span>
  </div>
  <textarea class="form-control" id="xtjj"></textarea>
</div>
</br>
<button onClick="Next()" style="color: #ffffff; background-color: #2A2D31; height: 5rem; box-shadow: 0px 0.5px 5px gray; font-size: 18px; border-radius: 50px;" class="btn btn-primary btn-block">怪レい日本语にすゑ</button>
</div>
<?php
if($app == y){

}else{
    echo('<div class="app" style="text-align: center;">');
    echo('<a href="https://play.google.com/store/apps/details?id=com.shenyusoftware.correctjp&hl=ja" style="padding: .46875rem .3rem;border-radius: 4px;" class="btn btn-outline-dark"><img width="63" height="15.3" src="./gp.png"></img>から怪しい日本語をインストール</a>');
    echo('</div>');
}
?>



<!--
<div
  class="ldBar"
  data-value="35"
  data-preset="bubble">
</div>

<footer class="fixed-bottom"　 style="position: absolute; text-align: center; background-color: #2a2d31; color: #ffffff;">
<p style="margin: 0;"><a href="https://twitter.com/0_a_e" class="btn" style="color: #ffffff; margin-bottom: 0rem; text-transform: none;">Created by Orange. MIT License.</a></p>
        <p style="margin: 0; color: #ffffff;"><a href="https://github.com/orangelinux/CorrectJP-NEW" style="color: #ffffff;" class="btn">ソースコードはGithubに公開されています。<i class="material-icons" style="color: #ffffff;">link</i></a></p>
    </footer> -->
<script>
function Next(){
const form = document.getElementById("forms");
const tagg = document.getElementById( "xtjj" ).value;
if(!form){
form.innerHTML= '<h3>テキストが入力されていません。</h3>';
} else {
form.innerHTML= '<div class="loader">Loading...</div>';
const URL = 'https://correctjp.work/view.php?text=' + tagg<?php if($app == y){echo('+ "&app=y"'); } ?>;
console.log(URL);
location.href=URL;
}
}
</script>
</body>