<?php 

namespace App;
  
  class Pesawat extends Koneksi {
    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql    = "SELECT * FROM tb_pesawat";
        $stmt   = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }
    public function edit($id)
    {
      
      $sql    = "SELECT * FROM tb_pesawat WHERE kode_pesawat=:kode_pesawat";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":kode_pesawat", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function simpan()
    {
        $maskapai       = $_POST['maskapai'];
        $jam_berangkat  = $_POST['jam_berangkat'];
        $bandara_asal   = $_POST['bandara_asal'];
        $bandara_tujuan = $_POST['bandara_tujuan'];
        $sql    = "INSERT INTO tb_pesawat (maskapai, jam_berangkat, bandara_asal, bandara_tujuan) VALUES (:maskapai, :jam_berangkat, :bandara_asal, :bandara_tujuan)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":maskapai", $maskapai);
        $stmt->bindParam(":jam_berangkat", $jam_berangkat);
        $stmt->bindParam(":bandara_asal", $bandara_asal);
        $stmt->bindParam(":bandara_tujuan", $bandara_tujuan);
        $stmt->execute();

    }
    public function update()
    {
        $maskapai       = $_POST['maskapai'];
        $jam_berangkat  = $_POST['jam_berangkat'];
        $bandara_asal   = $_POST['bandara_asal'];
        $bandara_tujuan = $_POST['bandara_tujuan'];
        $art_id         = $_POST['art_id'];

        $sql    = "UPDATE tb_pesawat SET maskapai=:maskapai, jam_berangkat=:jam_berangkat, bandara_asal=:bandara_asal, bandara_tujuan=:bandara_tujuan WHERE kode_pesawat=:kode_pesawat";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":maskapai", $maskapai);
        $stmt->bindParam(":jam_berangkat", $jam_berangkat);
        $stmt->bindParam(":bandara_asal", $bandara_asal);
        $stmt->bindParam(":bandara_tujuan", $bandara_tujuan);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tb_pesawat WHERE kode_pesawat=:kode_pesawat";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":kode_pesawat", $id);
        $stmt->execute();

    }

}