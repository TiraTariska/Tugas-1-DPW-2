<?php

include "animal.php";

class Sapi {
	var $cowi;
	function Tidak_bisa_terbang() {
		// $cowi-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $cowi-> Moooo;

	}
}

$cowi = new Sapi;
$cowi->jumlah_kaki = 4;
echo "Cowi adalah Sapi <br>";
echo "Punya Kaki Sebanyak : ". $cowi-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang". "<br>";
echo "Suaranya : Moooo ". $cowi->bersuara(). "<br>"; 

echo "<hr>";

class Kuda {
	var $poni;
	function Tidak_bisa_terbang() {
		// $poni-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $poni-> Winny;
	}
}


$poni = new Kuda;
$poni->jumlah_kaki = 4;
echo "Poni adalah Kuda <br>";
echo "Punya Kaki Sebanyak : ". $poni-> jumlah_kaki. "<br>";
echo "Tidak Bisa Terbang". "<br>";
echo "Suaranya : Whinny". $poni->bersuara(). "<br>";

echo "<hr>";

class Kucing {
	var $catty;
	function Tidak_bisa_terbang() {
		// $catty-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $catty-> Meoong;
	}

}

$catty = new Kucing;
$catty->jumlah_kaki = 4;
echo "Catty adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ". $catty-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang" . "<br>";
echo "Suaranya : Meoong". $catty->bersuara(). "<br>";

echo "<hr>";

class Nyamuk{
	var $sasqi;
	function Tidak_bisa_terbang() {
		// $sasqi-> Bisa Terbang;
	}
	function bersuara(){
		// $sasqi-> Buzz;
	}
}

$sasqi = new Nyamuk;
$sasqi->jumlah_kaki = 6;
echo "Sasqi adalah Nyamuk <br>";
echo "Punya Kaki Sebanyak : ". $sasqi-> jumlah_kaki. "<br>";
echo "Bisa terbang". "<br>";
echo "Suaranya : Buzz". $sasqi->bersuara(). "<br>";

echo "<hr>";

class Katak{
	var $frogy;
	function Tidak_bisa_terbang() {
		// $forgy-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $frogy-> Croak;
	}
}
$frogy = new Katak;
$frogy->jumlah_kaki = 4;
echo "Frogy adalah Katak <br>";
echo "Punya Kaki Sebanyak : ". $frogy-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang". "<br>";
echo "Suaranya : Croak". $frogy->bersuara(). "<br>";

