<?php 
  
namespace App;
  
  class Reservasi extends Koneksi {
    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql    = "SELECT * FROM tb_reservasi";
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
      
      $sql    = "SELECT * FROM tb_reservasi WHERE id_reservasi=:id_reservasi";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_reservasi", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function simpan()
    {
        $id_penumpang   = $_POST['id_penumpang'];
        $kode_pesawat   = $_POST['kode_pesawat'];
        $tgl_berangkat   = $_POST['tgl_berangkat'];
        $tgl_pesan   = $_POST['tgl_pesan'];
      
        $sql    = "INSERT INTO tb_reservasi (id_penumpang, kode_pesawat, tgl_berangkat, tgl_pesan) VALUES (:id_penumpang, :kode_pesawat, :tgl_berangkat, :tgl_pesan)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_penumpang", $id_penumpang);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->bindParam(":tgl_berangkat", $tgl_berangkat);
        $stmt->bindParam(":tgl_pesan", $tgl_pesan);
        $stmt->execute();

    }

    public function update()
    {
        $id_penumpang   = $_POST['id_penumpang'];
        $kode_pesawat   = $_POST['kode_pesawat'];
        $tgl_berangkat  = $_POST['tgl_berangkat'];
        $tgl_pesan      = $_POST['tgl_pesan'];
        $id_reservasi   = $_POST['id_reservasi'];

        $sql    = "UPDATE tb_reservasi SET id_penumpang=:id_penumpang, kode_pesawat=:kode_pesawat, tgl_berangkat=:tgl_berangkat, tgl_pesan=:tgl_pesan WHERE id_reservasi=:id_reservasi";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_penumpang", $id_penumpang);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->bindParam(":tgl_berangkat", $tgl_berangkat);
        $stmt->bindParam(":tgl_pesan", $tgl_pesan);
        $stmt->bindParam(":id_reservasi", $id_reservasi);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tb_reservasi WHERE id_reservasi=:id_reservasi";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_reservasi", $id);
        $stmt->execute();

    }

}