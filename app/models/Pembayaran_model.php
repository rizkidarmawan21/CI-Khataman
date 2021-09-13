<?php

class Pembayaran_model
{
    private $table = 'binadhor';
    private $table2 = 'bilghoib';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
   
    public function getAllbayarBinadhor()
    {
        $query = "SELECT * FROM ". $this->table. " ORDER BY id DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    

    public function getBayarBinadhor1()
    {
        $query = "SELECT * FROM ". $this->table. " WHERE statuss='1' ORDER BY nama DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getBayarBinadhor0()
    {
        $query = "SELECT * FROM ". $this->table. " WHERE statuss='0' ORDER BY nama DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getBinadhorById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    

    public function BayarDataBinadhor($data)
    {
        $query = "UPDATE binadhor SET 
                    statuss = :statuss
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('statuss', htmlspecialchars(0));
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getCountBayarBinadhorputra1()
    {
        $this->db->query("SELECT * FROM binadhor WHERE statuss= '1' AND jenkel = 'putra' ");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getCountBayarBinadhorputra0()
    {
        $this->db->query("SELECT * FROM binadhor WHERE statuss= '0' AND jenkel = 'putra'");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getCountBayarBinadhorputri1()
    {
        $this->db->query("SELECT * FROM binadhor WHERE statuss= '1' AND jenkel = 'putri' ");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getCountBayarBinadhorputri0()
    {
        $this->db->query("SELECT * FROM binadhor WHERE statuss= '0' AND jenkel = 'putri'");
        $this->db->execute(); 
        return $this->db->rowCount();
    }
    // ==================================================================================================
    public function getAllbayarBilghoib()
    {
        $query = "SELECT * FROM bilghoib ORDER BY id DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getBayarBilghoib1()
    {
        $query = "SELECT * FROM ". $this->table2. " WHERE statuss='1' ORDER BY nama DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getBayarBilghoib0()
    {
        $query = "SELECT * FROM ". $this->table2. " WHERE statuss='0' ORDER BY nama DESC";
        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getBilghoibById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table2 .' WHERE id =:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function BayarBilghoib($data)
    {
        $query = "UPDATE bilghoib SET 
                    statuss = :statuss
                    WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('statuss', htmlspecialchars(0));
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }



    public function getCountBayarBilghoibputra1()
    {
        $this->db->query("SELECT * FROM bilghoib WHERE statuss= '1' AND jenkel = 'putra' ");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getCountBayarBilghoibputra0()
    {
        $this->db->query("SELECT * FROM bilghoib WHERE statuss= '0' AND jenkel = 'putra' ");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getCountBayarBilghoibputri1()
    {
        $this->db->query("SELECT * FROM bilghoib WHERE statuss= '1' AND jenkel = 'putri' ");
        $this->db->execute(); 
        return $this->db->rowCount();
    }

    public function getCountBayarBilghoibputri0()
    {
        $this->db->query("SELECT * FROM bilghoib WHERE statuss= '0' AND jenkel = 'putri'");
        $this->db->execute(); 
        return $this->db->rowCount();
    }
}
