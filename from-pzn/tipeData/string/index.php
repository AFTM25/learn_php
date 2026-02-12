<?php

	// Multiline string
	// Heredoc dan Nowdoc

	// Heredoc
	echo <<<t1
	Belajar multiline string
	ini dengan cara heredoc

	
	t1;

	// Nowdoc
	echo <<<'t2'
	ini dengan cara nowdoc
	pertanyaan nya? apa itu parsing variabel? 
	parsing variabel adalah cara untuk melakukan pemanggilan variabel dalam string


	t2;

	$nama = 'Aditya';
	$usia = 21;
	echo <<<p
	Nama saya adalah $nama, dan 
	usia saya adalah $usia tahun

	
	p;

	echo <<<'p'
	Nama saya adalah $nama , dan usia saya adalah $usia tahun

	
	p;

?>
