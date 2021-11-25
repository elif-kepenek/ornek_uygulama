<?php

try{
	$veritabaniBaglantisi = new PDO('mysql:host=localhost;dbname=e-ticaret;charset=UTF8','elif','123456');
}catch(PDOException $hata){
//echo 'Bağlantı Hatası<br />'.$hata->getMessage();  //Bu alanı kullanıcı görmemeli.
	die();
}

$ayarlarSorgusu = $veritabaniBaglantisi->prepare('SELECT * FROM ayarlar LIMIT 1');
$ayarlarSorgusu->execute();
$ayarSayisi = $ayarlarSorgusu->rawCount();
$ayarlar = $ayarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($ayarSayisi>0){
	$siteAdi = $ayarlar['site_adi'];
	$siteBaslik = $ayarlar['site_baslik'];
	$siteAciklama = $ayarlar['site_aciklama'];
	$siteAnahtarKelime = $ayarlar['site_anahtar_kelime'];
	$siteCopyrightMetin = $ayarlar['site_copyright_metin'];
	$siteLogo = $ayarlar['site_logo'];
	$siteEmailAdres = $ayarlar['site_email_adres'];
	$siteEmailSifre = $ayarlar['site_email_sifre'];
}else{
//echo 'Site Ayar Sorgusu Hatalı.'; //Bu alanı da kullanıcı görmemeli.
	die();
}

?>