<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 
      function index(){ 
           $msg = 'kamu siapa ..........?????'; //Plain text 
           $key = 'recodeku.blospot.com123456789123'; //Key 32 character 
           //default menggunakan MCRYPT_RIJNDAEL_256 
           $hasil_enkripsi = $this->encrypt->encode($msg, $key);  
           $hasil_dekripsi = $this->encrypt->decode($hasil_enkripsi, $key); 
           echo "Pesan yang mau dienkripsi: ".$msg."<br/><br/>"; 
           echo "Hasil enkripsi: ".$hasil_enkripsi."<br/><br/>"; 
           echo "Hasil dekripsi: ".$hasil_dekripsi."<br/><br/>"; 
      } 
 } 