<?php

class Binadhor_model
{
    private $table = 'binadhor';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
   
    public function getAllBinadhor()
    {
        $query = 'SELECT * FROM '. $this->table. ' ORDER BY id DESC';
        $this->db->query($query);
        return $this->db->resultSet();
        // echo($query);
        // exit();
    }

    public function getAllBinadhorputra()
    {
        $query = "SELECT * FROM ". $this->table. " WHERE jenkel='putra' ORDER BY nama DESC";
        $this->db->query($query);
        return $this->db->resultSet();
        // echo($query);
        // exit();
    }
    public function getAllBinadhorputraPrint()
    {
        $query = "SELECT * FROM ". $this->table. " WHERE jenkel='putra' ORDER BY id";
        $this->db->query($query);
        return $this->db->resultSet();
        // echo($query);
        // exit();
    }
    public function getAllBinadhorputri()
    {
        $query = "SELECT * FROM ". $this->table. " WHERE jenkel='putri' ORDER BY nama DESC";
        $this->db->query($query);
        return $this->db->resultSet();
        // echo($query);
        // exit();
    }
    public function getCountBinadhor()
    {
        // $query = 'SELECT * FROM buku';
        $this->db->query('SELECT * FROM '. $this->table);
        $this->db->execute(); 
        return $this->db->rowCount();
        // echo($query);
        // exit();
    }
    public function getCountBinadhorputra()
    {
        $this->db->query("SELECT * FROM binadhor WHERE jenkel='putra'");
        $this->db->execute(); 
        return $this->db->rowCount();
    }
    public function getCountBinadhorputri()
    {
        $this->db->query("SELECT * FROM binadhor WHERE jenkel='putri'");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getBinadhorById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBinadhor($data)
    {
        $query = "INSERT INTO ". $this->table ." VALUES ('', :nama, :alamat, :kelas, :jenjang, :jenkel, :nama_ayah, :lahir, :temp_lahir, :no_telp, :statuss)";
        $this->db->query($query);
        $this->db->bind('nama', htmlspecialchars($data['nama']));
        $this->db->bind('alamat', htmlspecialchars($data['alamat']));
        $this->db->bind('kelas', htmlspecialchars($data['kelas']));
        $this->db->bind('jenjang', htmlspecialchars($data['jenjang']));
        $this->db->bind('jenkel', htmlspecialchars($data['jenkel']));
        $this->db->bind('nama_ayah', htmlspecialchars($data['nama_ayah']));
        $this->db->bind('lahir', htmlspecialchars($data['lahir']));
        $this->db->bind('temp_lahir', htmlspecialchars($data['temp_lahir']));
        $this->db->bind('no_telp', htmlspecialchars($data['no_telp']));
        $this->db->bind('statuss', htmlspecialchars(1));
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function hapusDataBinadhor($id)
    {

        $query = "DELETE FROM binadhor WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function bayar($data)
    {
        $query = "UPDATE binadhor SET 
                    statuss = :statuss
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('statuss', $data['statuss']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataBinadhor($data)
    {
        $query = "UPDATE binadhor SET 
                    nama = :nama,
                    alamat = :alamat,
                    kelas = :kelas,
                    jenjang = :jenjang,
                    jenkel = :jenkel,
                    nama_ayah = :nama_ayah,
                    lahir = :lahir,
                    temp_lahir = :temp_lahir,
                    no_telp = :no_telp
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('jenjang', $data['jenjang']);
        $this->db->bind('jenkel', $data['jenkel']);
        $this->db->bind('nama_ayah', $data['nama_ayah']);
        $this->db->bind('lahir', $data['lahir']);
        $this->db->bind('temp_lahir', $data['temp_lahir']);
        $this->db->bind('no_telp', $data['no_telp']);
        // $this->db->bind('statuss', $data['statuss']);
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
