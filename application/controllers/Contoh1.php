<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Contoh1 extends CI_Controller 
    {
        public function index()
         {
            echo "<h1> Perkenalkan </h1>";
            echo "Nama Saya Anggi Hikmah
            Saya tinggal di daerah bogor
            Hobby yang saya sukai adalah berenang dan bermain badminton";
    }
}