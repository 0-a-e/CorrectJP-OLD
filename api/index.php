<?php
$text = $_GET["text"];
$app = $_GET["app"];
$rv = $_GET["type"];
$JSON = $_GET["json"];
$right = array("多","鳥","雨","両","並","メルカリ","AQUOS","aquos","Aquos","huaweimk","あなた","貴","し","ぶ","で","応","ス","雑",'貨','見',"潰","め","キ","ぞ","舐","絶","対","得","溜","達","jp","NHK","XPERIA","円","LINEpay","PayPay","Twitter","ツイッター","instagram","インスタ","ライン","LINE","line","風","なさい","強","東京","シリコンバレー","google","グーグル","Google","スカイツリー","SKY TREE","TOKYO","ハ","amazon","アマゾン","乘","黑","snapdragon","SD","PUBG","労働","東","ラーメン","🇯🇵","🇰🇷","🇺🇸","🇬🇧","🇷🇺","🇩🇪","🇮🇳","🇿🇦","🇧🇷","オ","愛","語","ぬ","る","iphone","アイフォン","だ","変","榮","強","う","ハ","応","偉","義","結","協","調","剤","様","セ","動","評","ファーウェイ","HUAWEI");
$correct = array("乡","乌","丽","两","业","淘宝網","HUAWEI","HUAWEI","HUAWEI","ファーウェイウェイ","貴様","贵","レ","ふ","て",'应','ヌ','杂',"货","见","溃","ぬ","ギ","そ","舐","绝","对","慧","贮","们","cn","CCTV","HUAWEI","人民元","alipay","WechatPay","weibo","ウェイボ","Tiktok","Tiktok","wechat","wechat","wechat","风","(しなさい)","强","北京","深圳","百度","百度","百度","上海中心","shanghai tower","上海","八゜","亚马逊","亚马逊","乘","黑","Kirin","NM","荒野行動","極度勞動","东","うーメソ","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","🇨🇳","才","爱","语","ゐ","ゑ","HUAWEI","ファーウェイ","た","變","荣","强","ラ","八","应","伟","义","结","协","调","剂","樣","乜",'动',"评","华为技术有限公司","华为技术有限公司");
if ($rv == "reverse"){
$nright = str_replace($correct,$right,$text);
$type = "reverse";
} else {
$nright = str_replace($right,$correct,$text);
$type = "normal";
} 
if ($JSON = "yes"){
$result = '{"value":"'.$nright.'",type":"'.$type.'"}';
} else {
$nright = $result;
}
echo($result);
?>