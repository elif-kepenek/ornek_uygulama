<?php 

$IPAdresi = $_SERVER['REMOTE_ADDR'];
$zamanDamgasi = time();
$tarihSaat = date('d.m.Y H:i:s', $zamanDamgasi);

function guvenlik($deger){
	$boslukSil = trim($deger);
	$taglariTemizle = script_tags($boslukSil);
	$etkisizYap = htmlspecialchars($taglariTemizle);
	$sonuc = $etkisizYap;
	return $sonuc;
}

?>