<?php
//model with PDO
class Catalogue_model
{
    private $table = 'house';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllHouse()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getHouseID($id)
    {
        $this->db->query('SELECT * FROM house INNER JOIN tenant ON house.id_tenant = tenant.id_tenant WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addHouseData($data)
    {
        $query = "INSERT INTO house VALUES ('', :name, :type, :price, :bedroom, :bathroom, :garage, :id_tenant)";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('type', $data['type']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('bedroom', $data['bedroom']);
        $this->db->bind('bathroom', $data['bathroom']);
        $this->db->bind('garage', $data['garage']);
        $this->db->bind('id_tenant', $data['id_tenant']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteHouseData($id)
    {
        $query = 'DELETE FROM house WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editHouseData($data)
    {
        $query = "UPDATE house SET 
                name = :name,
                type = :type,
                price = :price,
                bedroom = :bedroom,
                bathroom = :bathroom,
                garage = :garage,
                id_tenant = :id_tenant
                WHERE id = :id
                ";

        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('type', $data['type']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('bedroom', $data['bedroom']);
        $this->db->bind('bathroom', $data['bathroom']);
        $this->db->bind('garage', $data['garage']);
        $this->db->bind('id', $data['id']);
        $this->db->bind('id_tenant', $data['id_tenant']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function searchHouseData()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM house WHERE name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
