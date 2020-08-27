<?php
    $ua = $_SERVER['HTTP_USER_AGENT'];
    if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
    {
    header('https://www.facebook.com/RaBiitch1945');
    die();
    }
    error_reporting(0);
	$RaBiitch = array('https://chat.whatsapp.com/invite/GEUoGUelPWqDIwUwdfu3CE','https://chat.whatsapp.com/invite/BMbR0xzQAIXI7plzY77ghA','https://chat.whatsapp.com/invite/LPzggve935IHuhSJ41Rc03');
    $grup = $RaBiitch[rand(0, (count($iRaBiitch)-1))];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WhatsApp Group Invite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="./assets/images/logowa.png" />
    <meta property="og:title" content="Whatsapp Group Invite" />
    <meta name="description" content="Follow This Link">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/RaBiitch.css" />
    <link rel="shorcut icon" href="./assets/images/logowa.png"/>
</head>
<body>
    <div class="RaBiitch">
        <div class="content">
            <RaBiitch class="txt-content">Join Grup Whatsapp</RaBiitch>
            <img class="img-content" src="./assets/images/logowa.jpg" alt="RaBiitch"/>
            <RaBiitch class="txt-judul">Grup Pencari Uang Gratis</RaBiitch>
            <RaBiitch class="txt-des">WhatsApp Group Invite</RaBiitch>
            <form id="RaBiitch" action="<?php echo $grup;?>" method="POST">
                <button class="btn-content" type="submit" name="join">JOIN CHAT</button>
            </form>
            <hr class="kntlmmk"></hr>
            <RaBiitch class="txt-gapunya">Sudah bergabung? Keluar jika sudah.</RaBiitch>
            <a href="./">Logout</a>
        </div>
    </div>
</body>
</html>