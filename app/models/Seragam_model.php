<?php

class Seragam_model
{
    private $table = 'seragam';
    private $table2 = 'serbilghoib';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
   
    public function getAllSeragam()
    {
        $query = 'SELECT * FROM '. $this->table. ' ORDER BY id DESC';
        $this->db->query($query);
        return $this->db->resultSet();
        // echo($query);
        // exit();
    }

    public function getAllSerbilghoib()
    {
        $query = 'SELECT * FROM '. $this->table2. ' ORDER BY id DESC';
        $this->db->query($query);
        return $this->db->resultSet();
        // echo($query);
        // exit();
    }

    // public function getAllBilghoibputra()
    // {
    //     $query = "SELECT * FROM ". $this->table. " WHERE jenkel='putra' ORDER BY nama DESC";
    //     $this->db->query($query);
    //     return $this->db->resultSet();
    //     // echo($query);
    //     // exit();
    // }
    // public function getCountBilghoib()
    // {
    //     // $query = 'SELECT * FROM buku';
    //     $this->db->query('SELECT * FROM '. $this->table);
    //     $this->db->execute(); 
    //     return $this->db->rowCount();
    //     // echo($query);
    //     // exit();
    // }

    public function getSeragamById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getSerbilghoibById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table2 .' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSeragam($data)
    {
        $query = "INSERT INTO ". $this->table ." VALUES ('', :nama, :ukuran)";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('ukuran', htmlspecialchars($data['ukuran']));
        $this->db->execute(); 
        return $this->db->rowCount();
    }


    public function tambahDataSerbilghoib($data)
    {
        $query = "INSERT INTO serbilghoib VALUES ('', :nama, :ukuran)";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('ukuran', htmlspecialchars($data['ukuran']));
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function hapusDataSeragam($id)
    {

        $query = "DELETE FROM seragam WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataSerbilghoib($id)
    {

        $query = "DELETE FROM serbilghoib WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataSeragam($data)
    {
        $query = "UPDATE seragam SET 
                    nama = :nama,
                    ukuran = :ukuran
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('ukuran', $data['ukuran']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataSerbilghoib($data)
    {
        $query = "UPDATE serbilghoib SET 
                    nama = :nama,
                    ukuran = :ukuran
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('ukuran', $data['ukuran']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // public function cariDataBuku(){
    //     $keyword = $_POST['keyword'];
    //     $query = "SELECT * FROM buku WHERE nama LIKE :keyword OR jurusan LIKE :keyword";
    //     $this->db->query($query);
    //     $this->db->bind('keyword',"%$keyword%");
    //     return $this->db->resultSet();
    // }
}
