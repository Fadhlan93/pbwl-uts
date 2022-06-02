<?php

namespace App;
use PDO;

class Koneksi {

    protected object $db;
 
    public function __construct()
{
     try {
         $this->db = new PDO("mysql:host=localhost;dbname=tiket_pesawat", "root", "");
     } catch (\Exception $e) {
         die ("Erorr : " . $e->getMassage());
     }
   }
}