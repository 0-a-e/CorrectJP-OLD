<?php
if (empty($_SERVER['HTTPS'])) {
    header("Location: https://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");
    exit;
}
$text = $_GET["text"];
$app = $_GET["app"];
$rv = $_GET["rv"];
#𝐐𝐖𝐄𝐑𝐓𝐘𝐔𝐈𝐎𝐏𝐀𝐒𝐃𝐅𝐆𝐇𝐉𝐊𝐋"𝐙𝐗𝐂𝐕𝐁𝐍𝐌
#𝐀𝐁𝐂𝐃𝐄𝐅𝐆𝐇𝐈𝐉𝐊𝐋𝐌𝐍𝐎𝐏𝐐𝐑𝐒𝐓𝐔𝐕𝐖𝐗𝐘𝐙
$right = array("A","B","C","D","E","F","G","H","I","J","K","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$correct = array("𝐀","𝐁","𝐂","𝐃","𝐄","𝐅","𝐆","𝐇","𝐈","𝐉","𝐊","𝐌","𝐍","𝐎","𝐏","𝐐","𝐑","𝐒","𝐓","𝐔","𝐕","𝐖","𝐗","𝐘","𝐙");
if ($rv == "y"){
$nright = str_replace($correct,$right,$text);
} else {
$nright = str_replace($right,$correct,$text);
}

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
<?php if($app == y) {echo('<a href="https://correctjp.work?app=y" style="border-radius: 1000px;" class="btn btn-link"><i class="material-icons" style="color: #ffffff;">');} else {echo('<a href="https://correctjp.work" style="border-radius: 1000px; padding: 0.5rem;" class="btn btn-link"><i class="material-icons" style="font-size: 24px; color: #ffffff;">');} ?>
arrow_back
</i>
</a>
  <a class="navbar-brand" style="color: #ffffff;" style="position: relative; " href="https://correctjp.work">怪しい日本語<?php if ($rv == "y"){echo("逆変換"); } ?></a>
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
        <p style="margin: 0; color: #ffffff; display: inline-flex; vertical-align: middle;"><a href="https://github.com/orangelinux/CorrectJP-NEW" style="color: #ffffff; display: inline-flex; vertical-align: middle;" class="btn">ソースコードはGithubに公開されています。<i class="material-icons" style="color: #ffffff; padding-bottom: 3px;">link</i></a></p>
    </footer>
</body>