<?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Welcome extends CI_Controller { 
      function __construct(){ 
           parent::__construct(); 
           $this->load->library('encrypt'); 
      } 
      function index(){ 
           $msg = 'Ini Pesan rahasia lho! Jangan bilang siapa-siapa ya!'; //Plain text 
           $key = '688797800hojnkjvlhvl'; //Key 32 character 
           //default menggunakan MCRYPT_RIJNDAEL_256 
           $hasil_enkripsi = $this->encrypt->encode($msg, $key);  
           $hasil_dekripsi = $this->encrypt->decode($hasil_enkripsi, $key); 
           echo "Pesan yang mau dienkripsi: ".$msg."<br/><br/>"; 
           echo "Hasil enkripsi: ".$hasil_enkripsi."<br/><br/>"; 
           echo "Hasil dekripsi: ".$hasil_dekripsi."<br/><br/>"; 
      } 
 } 