<?php
if (empty($_SERVER['HTTPS'])) {
    header("Location: https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
    exit;
}
$text = $_POST["text"];
$right = array("あなた","貴","し","ぶ","で","応","ス","雑",'貨','見',"潰","め","キ","ぞ","舐","絶","対","得","溜","達","jp","NHK","XPERIA","円","LINEpay","PayPay","Twitter","ツイッター","instagram","インスタ","ライン","LINE","line","風","なさい","強","東京","シリコンバレー","google","グーグル","Google","スカイツリー","SKY TREE","TOKYO","ハ","amazon","アマゾン","乘","黑","snapdragon","SD","PUBG","労働","ラーメン","🇯🇵","🇰🇷","🇺🇸","🇬🇧","🇷🇺","🇩🇪","🇮🇳","🇿🇦","🇧🇷","オ","愛","語","ぬ","る","iphone","アイフォン","だ","変","榮","強","う","ハ","応","偉","義","結","協","調","剤","様","セ");
$correct = array("貴様","贵","レ","ふ","て",'应','ヌ','杂',"货","见","溃","ぬ","ギ","そ","舐","绝","对","慧","贮","们","cn","CCTV","HUAWEI","人民元","alipay","WechatPay","weibo","ウェイボ","Tiktok","Tiktok","wechat","wechat","wechat","风","(しなさい)","强","深圳","深圳","百度","百度","百度","上海中心","shanghai tower","上海","八゜","亚马逊","亚马逊","乘","黑","Kirin","NM","荒野行動","極度勞動","うーメソ","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","才","爱","语","ゐ","ゑ","HUAWEI","ファーウェイ","た","變","荣","强","ラ","八","应","伟","义","结","协","调","剂","樣","乜");
$nright = str_replace($right,$correct,$text);
#########################################
### ツイートの投稿
if(!empty($nright)){
 
 //tmhOAuth.phpをインクルードします。
 require_once("./OA/tmhOAuth.php");

 $sConsumerKey = "WOxxZLOVJRx976nxgRLln5iqB";
 //Consumer secretの値を格納
 $sConsumerSecret = "QJWFwvobL5zCQonbGgDSvOozwBy5KJmeqHXVi0FAkNDrI86r9Q";
 //Access Tokenの値を格納
 $sAccessToken = "884739810958524416-FBVqmN95aKvLjiawknhBjqdvk5m6bft";
 //Access Token Secretの値を格納
 $sAccessTokenSecret = "mpnNIsIXq8gjldefwO41ASjxiO5p7qZf3ABOTMYiymGfn";
 
 $twObj = new tmhOauth(
 array(
 "consumer_key" => $sConsumerKey,
 "consumer_secret" => $sConsumerSecret,
 "token" => $sAccessToken,
 "secret" => $sAccessTokenSecret,
 "curl_ssl_verifypeer" => false,
 )
 );

 $code = $twObj->request( 'POST', "https://api.twitter.com/1.1/statuses/update.json",array("status" => $nright));

 // statuses/update.json の結果をjson文字列で受け取り配列に格納
 $aResData = json_decode($twObj->response["response"], true);

 if(isset($aResData['errors']) && $aResData['errors'] != ''){
  echo("ERROR");
 }else{
 //配列を展開
 $iTweetId =                 $aResData['id'];
 $sIdStr =                   (string)$aResData['id_str'];
 $sText=                     $aResData['text'];
 $sName=                     $aResData['user']['name'];
 $sScreenName=               $aResData['user']['screen_name'];
 $sProfileImageUrl =         $aResData['user']['profile_image_url'];
 $sCreatedAt =               $aResData['created_at'];
 $sStrtotime=                strtotime($sCreatedAt);
 $sCreatedAt =               date('Y-m-d H:i:s', $sStrtotime);
 echo($iTweetId);
 }
}
//////////
//if ($text == "") {
 //   header('Location: https://correctjp.work');
//}
?>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/FezVrasta/snackbarjs/1.1.0/dist/snackbar.min.js"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<!-- As a link -->
<nav class="navbar" style="background-color: #2A2D31;">
<a href="https://correctjp.work" style="border-radius: 1000px;" class="btn btn-link"><i class="material-icons" style="color: #ffffff;">
arrow_back
</i>
</a>
  <a class="navbar-brand" style="color: #ffffff;" style="position: relative; " href="https://correctjp.work">怪しい日本語</a>
</nav>
<textarea id="mainboard" style="position: relative; width: 100%; height: 100%;"><?php echo $nright; ?></textarea>

<button type="button" class="btn btn-outline-primary" onClick="copy()" style="position: fixed; text-align: center; left: 50%; right: 50%; transform: translate(-50%, -50%); z-index: 30; top: 80%; text-align: center; width: 50%;" data-toggle="snackbar" data-content="コピーされました！ : <?php echo $nright; ?>"" data-html-allowed="true" data-timeout="3">コピーする</button>
<script>
var re = document.getElementById("mainboard");
re.readOnly = true;
function copy() {
    console.log("Copied!!");
    var text = document.getElementById("mainboard");
    text.select();
    document.execCommand("copy");
}
</script>
<footer class="fixed-bottom"　 style="text-align: center; background-color: #2a2d31; color: #ffffff;">
<p style="margin: 0;"><a href="https://twitter.com/0_a_e" class="btn" style="color: #ffffff; margin-bottom: 0rem; text-transform: none;">Created by Orange. MIT License.</a></p>
        <p style="margin: 0; color: #ffffff; display: inline-flex; vertical-align: middle;"><a href="https://github.com/orangelinux/CorrectJP-NEW" style="color: #ffffff; display: inline-flex; vertical-align: middle;" class="btn">ソースコードはGithubに公開されています。<i class="material-icons" style="color: #ffffff;">link</i></a></p>
    </footer>
</body>