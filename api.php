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
<style>

.fakeButtons {
  height: 10px;
  width: 10px;
  border-radius: 50%;
  border: 1px solid #000;
  position: relative;
  top: 6px;
  left: 6px;
  background-color: #ff3b47;
  border-color: #9d252b;
  display: inline-block;
}

.fakeMinimize {
  left: 11px;
  background-color: #ffc100;
  border-color: #9d802c;
}

.fakeZoom {
  left: 16px;
  background-color: #00d742;
  border-color: #049931;
}

.fakeMenu {
  width: 350px;
  box-sizing: border-box;
  height: 25px;
  background-color: #bbb;
  margin: 0 auto;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
}

.fakeScreen {
  background-color: #151515;
  box-sizing: border-box;
  width: 350px;
  margin: 0 auto;
  padding: 20px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
}

p {
  position: relative;
  left: 50%;
  margin-left: -8.5em;
  text-align: left;
  font-size: 1.25em;
  font-family: monospace;
  white-space: nowrap;
  overflow: hidden;
  width: 0;
}

span {
  color: #fff;
  font-weight: bold;
}

.line1 {
  color: #9CD9F0;
  -webkit-animation: type .5s 1s steps(20, end) forwards;
  -moz-animation: type .5s 1s steps(20, end) forwards;
  -o-animation: type .5s 1s steps(20, end) forwards;
  animation: type .5s 1s steps(20, end) forwards;
}

.cursor1 {
  -webkit-animation: blink 1s 2s 2 forwards;
  -moz-animation: blink 1s 2s 2 forwards;
  -o-animation: blink 1s 2s 2 forwards;
  animation: blink 1s 2s 2 forwards;
}

.line2 {
  color: #CDEE69;
  -webkit-animation: type .5s 4.25s steps(20, end) forwards;
  -moz-animation: type .5s 4.25s steps(20, end) forwards;
  -o-animation: type .5s 4.25s steps(20, end) forwards;
  animation: type .5s 4.25s steps(20, end) forwards;
}

.cursor2 {
  -webkit-animation: blink 1s 5.25s 2 forwards;
  -moz-animation: blink 1s 5.25s 2 forwards;
  -o-animation: blink 1s 5.25s 2 forwards;
  animation: blink 1s 5.25s 2 forwards;
}

.line3 {
  color: #E09690;
  -webkit-animation: type .5s 7.5s steps(20, end) forwards;
  -moz-animation: type .5s 7.5s steps(20, end) forwards;
  -o-animation: type .5s 7.5s steps(20, end) forwards;
  animation: type .5s 7.5s steps(20, end) forwards;
}

.cursor3 {
  -webkit-animation: blink 1s 8.5s 2 forwards;
  -moz-animation: blink 1s 8.5s 2 forwards;
  -o-animation: blink 1s 8.5s 2 forwards;
  animation: blink 1s 8.5s 2 forwards;
}

.line4 {
  color: #fff;
  -webkit-animation: type .5s 10.75s steps(20, end) forwards;
  -moz-animation: type .5s 10.75s steps(20, end) forwards;
  -o-animation: type .5s 10.75s steps(20, end) forwards;
  animation: type .5s 10.75s steps(20, end) forwards;
}

.cursor4 {
  -webkit-animation: blink 1s 11.5s infinite;
  -moz-animation: blink 1s 8.5s infinite;
  -o-animation: blink 1s 8.5s infinite;
  animation: blink 1s 8.5s infinite;
}

@-webkit-keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-moz-keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-o-keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@keyframes blink {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  90% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

@-webkit-keyframes type {
  to {
    width: 17em;
  }
}

@-moz-keyframes type {
  to {
    width: 17em;
  }
}

@-o-keyframes type {
  to {
    width: 17em;
  }
}

@keyframes type {
  to {
    width: 17em;
  }
}
</style>
</head>
<body>
<nav class="navbar" style="background-color: #2A2D31;" >
<a class="navbar-brand" href="#" style="color: #ffffff;">怪しい日本語API</a>
</nav>
<div class=fakeMenu>
  <div class="fakeButtons fakeClose"></div>
  <div class="fakeButtons fakeMinimize"></div>
  <div class="fakeButtons fakeZoom"></div>
</div>
<div class="fakeScreen">
  <p class="line1"><span class="cursor1">_</span></p>
  <p class="line2">&nbsp;&nbsp;&ldquo;I'm a web designer.&rdquo;,<span class="cursor2">_</span></p>
  <p class="line3">&nbsp;&nbsp;&ldquo;Let's work together!&rdquo;&nbsp;&#93;<span class="cursor3">_</span></p>
  <p class="line4">><span class="cursor4">_</span></p>
</div>

</body>