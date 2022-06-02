<?php 
  
namespace App;

  class Tiket extends Koneksi {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function tampil()
    {
        $sql    = "SELECT * FROM tb_tiket";
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
      
      $sql    = "SELECT * FROM tb_tiket WHERE id_tiket=:id_tiket";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_tiket", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function simpan()
    {
        $kode_pesawat   = $_POST['kode_pesawat'];
        $jadwal         = $_POST['jadwal'];
        $no_kursi       = $_POST['no_kursi'];
        $kelas          = $_POST['kelas'];

        $sql    = "INSERT INTO tb_tiket (kode_pesawat, jadwal, no_kursi, kelas) VALUES (:kode_pesawat, :jadwal, :no_kursi, :kelas)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->bindParam(":jadwal", $jadwal);
        $stmt->bindParam(":no_kursi", $no_kursi);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->execute();

    }

    public function update()
    {
        $kode_pesawat   = $_POST['kode_pesawat'];
        $jadwal         = $_POST['jadwal'];
        $no_kursi       = $_POST['no_kursi'];
        $kelas          = $_POST['kelas'];
        $id_tiket       = $_POST['id_tiket'];

        $sql    = "UPDATE tb_tiket SET kode_pesawat=:kode_pesawat, jadwal=:jadwal, no_kursi=:no_kursi, kelas=:kelas WHERE id_tiket=:id_tiket";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->bindParam(":jadwal", $jadwal);
        $stmt->bindParam(":no_kursi", $no_kursi);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->bindParam(":id_tiket", $id_tiket);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tb_tiket WHERE id_tiket=:id_tiket";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_tiket", $id);
        $stmt->execute();

    }

}