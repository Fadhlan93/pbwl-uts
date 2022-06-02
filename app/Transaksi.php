<?php 
  
namespace App;

  class Transaksi extends Koneksi {
    public function __construct()
    {
        parent::__construct();
    }
    
    public function tampil()
    {
        $sql    = "SELECT * FROM tb_transaksi";
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
      
      $sql    = "SELECT * FROM tb_transaksi WHERE id_transaksi=:id_transaksi";
      $stmt   = $this->db->prepare($sql);
      $stmt->bindParam(":id_transaksi", $id);
      $stmt->execute();

      $row = $stmt->fetch();

      return $row;
    }
    public function simpan()
    {
        $id_tiket        = $_POST['id_tiket'];
        $maskapai        = $_POST['maskapai'];
        $kode_pesawat    = $_POST['kode_pesawat'];
        $nama_pemesan    = $_POST['nama_pemesan'];
        $tgl_berangkat   = $_POST['tgl_berangkat'];
        $waktu_berangkat = $_POST['waktu_berangkat'];
        $waktu_sampai    = $_POST['waktu_sampai'];
        $no_kursi        = $_POST['no_kursi'];
        $kota_tujuan     = $_POST['kota_tujuan'];
        $kelas           = $_POST['kelas'];
        $jumlah_tiket    = $_POST['jumlah_tiket'];

        $sql    = "INSERT INTO tb_transaksi (id_tiket, maskapai, kode_pesawat, nama_pemesan, tgl_berangkat, waktu_berangkat, waktu_sampai, no_kursi, kota_tujuan, kelas, jumlah_tiket) VALUES (:id_tiket, :maskapai, :kode_pesawat, :nama_pemesan, :tgl_berangkat, :waktu_berangkat, :waktu_sampai, :no_kursi, :kota_tujuan, :kelas, :jumlah_tiket)";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_tiket", $id_tiket);
        $stmt->bindParam(":maskapai", $maskapai);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->bindParam(":nama_pemesan", $nama_pemesan);
        $stmt->bindParam(":tgl_berangkat", $tgl_berangkat);
        $stmt->bindParam(":waktu_berangkat", $waktu_berangkat);
        $stmt->bindParam(":waktu_sampai", $waktu_sampai);
        $stmt->bindParam(":no_kursi", $no_kursi);
        $stmt->bindParam(":kota_tujuan", $kota_tujuan);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->bindParam(":jumlah_tiket", $jumlah_tiket);
        $stmt->execute();

    }

    public function update()
    {
        $id_tiket        = $_POST['id_tiket'];
        $maskapai        = $_POST['maskapai'];
        $kode_pesawat    = $_POST['kode_pesawat'];
        $nama_pemesan    = $_POST['nama_pemesan'];
        $tgl_berangkat   = $_POST['tgl_berangkat'];
        $waktu_berangkat = $_POST['waktu_berangkat'];
        $waktu_sampai    = $_POST['waktu_sampai'];
        $no_kursi        = $_POST['no_kursi'];
        $kota_tujuan     = $_POST['kota_tujuan'];
        $kelas           = $_POST['kelas'];
        $jumlah_tiket    = $_POST['jumlah_tiket'];
        $id_transaksi    = $_POST['id_transaksi'];

        $sql    = "UPDATE tb_transaksi SET id_tiket=:id_tiket, maskapai=:maskapai, kode_pesawat=:kode_pesawat, nama_pemesan=:nama_pemesan, tgl_berangkat=:tgl_berangkat, waktu_berangkat=:waktu_berangkat, waktu_sampai=:waktu_sampai, no_kursi=:no_kursi, kota_tujuan=:kota_tujuan, kelas=:kelas, jumlah_tiket=:jumlah_tiket  WHERE id_transaksi=:id_transaksi";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_tiket", $id_tiket);
        $stmt->bindParam(":maskapai", $maskapai);
        $stmt->bindParam(":kode_pesawat", $kode_pesawat);
        $stmt->bindParam(":nama_pemesan", $nama_pemesan);
        $stmt->bindParam(":tgl_berangkat", $tgl_berangkat);
        $stmt->bindParam(":waktu_berangkat", $waktu_berangkat);
        $stmt->bindParam(":waktu_sampai", $waktu_sampai);
        $stmt->bindParam(":no_kursi", $no_kursi);
        $stmt->bindParam(":kota_tujuan", $kota_tujuan);
        $stmt->bindParam(":kelas", $kelas);
        $stmt->bindParam(":jumlah_tiket", $jumlah_tiket);
        $stmt->bindParam(":id_transaksi", $id_transaksi);
        $stmt->execute();
    }

    public function delete($id)
    {
        
        $sql    = "DELETE FROM tb_transaksi WHERE id_transaksi=:id_transaksi";
        $stmt   = $this->db->prepare($sql);
        $stmt->bindParam(":id_transaksi", $id);
        $stmt->execute();

    }

}