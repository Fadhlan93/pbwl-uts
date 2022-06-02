<?php 

namespace App;
  
  class Penumpang extends Koneksi {

public function __construct()
{
    parent::__construct();
}

    public function tampil()
    {
        $sql    = "SELECT * FROM tb_penumpang";
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
      
      $sql    = "SELECT * FROM tb_penumpang WHERE id_penumpang=:id_penumpang";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_penumpang", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function simpan()
    {
        $nama          = $_POST['nama'];
        $alamat        = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_telepon    = $_POST['no_telepon'];
        
        $sql    = "INSERT INTO tb_penumpang (nama, alamat, jenis_kelamin, no_telepon) VALUES(:nama, :alamat, :jenis_kelamin, :no_telepon)";
        $stmt   = $this->db->prepare($sql);  
        $stmt->bindParam(":nama", $nama);
        $stmt->bindParam(":alamat", $alamat);
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin);
        $stmt->bindParam(":no_telepon", $no_telepon);
        $stmt->execute();
    }

    public function update()
    {
        $nama               = $_POST['nama'];
        $alamat             = $_POST['alamat'];
        $jenis_kelamin      = $_POST['jenis_kelamin'];
        $no_telepon         = $_POST['no_telepon'];
        $id_penumpang       = $_POST['id_penumpang'];


        $sql    = "UPDATE tb_penumpang SET nama=:nama, alamat=:alamat, jenis_kelamin=:jenis_kelamin, no_telepon=:no_telepon WHERE id_penumpang=:id_penumpang";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":nama", $nama );
        $stmt->bindParam(":alamat", $alamat );
        $stmt->bindParam(":jenis_kelamin", $jenis_kelamin );
        $stmt->bindParam(":no_telepon", $no_telepon );
        $stmt->bindParam(":id_penumpang", $id_penumpang);
        $stmt->execute();

    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tb_penumpang WHERE id_penumpang=:id_penumpang";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_penumpang", $id);
        $stmt->execute();

    }

}