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
.lavel1 {
  position: relative;
  border: none;
  outline: none;
  user-select: none;
  transition: 0.2s;
}
label {
  margin-bottom: 0px;
}
.lavel2 {
  position: relative;
  border: none;
  outline: none;
  user-select: none;
  transition: 0.2s;
}
input[type="checkbox"]:checked + .lavel1 {
  fill: #53ed98;
  color: #53ed98;
  transform:rotateZ(360deg);
}
input[type="checkbox"]:checked + .lavel2 {
  fill: #53ed98;
  color: #53ed98;
  transform:rotateZ(360deg);
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 20px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  -moz-font-feature-settings: 'liga';
  -moz-osx-font-smoothing: grayscale;
  display: inline-flex;
  vertical-align: middle;
}
</style>
</head>
<body>
<!-- As a link -->
<nav class="navbar" style="background-color: #2A2D31;" >
  <a class="navbar-brand" href="#" style="color: #ffffff;">怪しい日本語ジェネレーター</a>
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" style="color:#ffffff;" href="/ALIEN.php">ALIENジェネレーター<span class="sr-only">(current)</span></a>
      </li>
  </ul>
</nav>

<div class="Logos" style="position: relative; margin-top: 30px;">
<div class="alert alert-danger" role="alert">
  メンテナンス中です。使用は可能ですが、正常に動作しない可能性があります。
</div>
<h2 class="top" style="text-align: center; font-size: 28px;">怪レい日本语ジェネレーター</h2>
<h5 style="text-align: center;">贵様の正レい日本语を怪レい日本语に変換レ(しなさい)。</h5>
</div>
</br>
<p style="color: gray; text-align: center;">下に正レい日本语を入力(しなさい)。</p>
<div id="forms">
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"></span>
  </div>
  <textarea class="form-control" id="xtjj"></textarea>
</div>
</br>
<button onClick="Next()" style="color: #ffffff; background-color: #2A2D31; height: 5rem; box-shadow: 0px 0.5px 5px gray; font-size: 18px; border-radius: 50px;" id="bt" class="btn btn-primary btn-block">怪レい日本语にすゑ</button>
</div>
</br>
<form name="reve" style="text-align: center;">
<label style="text-align: center; display: inline-block; border-radius: 5px; line-height: 0.5; padding: .46875rem .3rem; " for="reverse" onClick="btchange()" class="btn btn-outline-dark">
<input style="display: none;" type="checkbox" id="reverse">
<label onClick="btchange()" class="lavel1" for="reverse">
<svg version="1.1" class="lavel1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px" viewBox="0 0 24 24" xml:space="preserve">
<image href="data:image/png;base64,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" />
</svg>
<!--<object id="hoge" type="image/svg+xml" data="./re.svg"></object>-->
</label>
<label onClick="btchange()" style="margin-bottom: 0px;" class="lavel2" for="reverse">逆変換</label>
</label>
</form>
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
function reinput() {
  const form = document.getElementById("forms");
  forms.innerHTML = '<div class="input-group"><div class="input-group-prepend"><span class="input-group-text"></span></div><textarea class="form-control" id="xtjj"></textarea></div></br><button onClick="Next()" style="color: #ffffff; background-color: #2A2D31; height: 5rem; box-shadow: 0px 0.5px 5px gray; font-size: 18px; border-radius: 50px;" id="bt" class="btn btn-primary btn-block">怪レい日本语にすゑ</button></div>';
}
function btchange() {
const bt = document.getElementById("bt");
const reverse = document.reve.reverse.checked;
if(reverse){
bt.innerHTML = '正しい日本語にする';
} else {
  bt.innerHTML = '怪レい日本语にすゑ';
}
console.log("STAT");
}
function Next(){
const form = document.getElementById("forms");
const bt = document.getElementById("bt");
const reverse = document.reve.reverse.checked;
const tagg = document.getElementById( "xtjj" ).value;
console.log(reverse);
if(tagg == "") {
  console.log("tagg empty!");
form.innerHTML= '<div style="text-align: center;"><h5 style="text-align: center; color:#ff8e8c;">テキストが入力されていません。</h5><button class="btn btn-outline-dark" onClick="reinput()">入力する</button></div>';
} else {
  if(reverse){
    console.log("ry");
    rvw = "y";
  }else {
    console.log("rf");
    rvw = "n";
    }
form.innerHTML= '<div class="loader">Loading...</div>';
const URL = 'https://correctjp.work/view.php?rv=' + rvw + '&text=' + tagg<?php if($app == y){echo('+ "&app=y"'); } ?>;
console.log(URL);
location.href=URL;
}
}
</script>
</body>