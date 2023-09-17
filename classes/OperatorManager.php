<?php




class OperatorManager
{


    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findOperatorById($id)
    {
        $req = $this->db->prepare("SELECT * FROM tour_operator WHERE id = :id");
        $req->bindValue(':id', $id);
        $req->execute();
        $operatorData = $req->fetch(PDO::FETCH_ASSOC);
    
        if ($operatorData) {
            return new TourOperator($operatorData);
        } else {
            return null; 
        }
    }
    

    public function addOperator($name, $link)
    {
        $req = $this->db->prepare("INSERT INTO tour_operator(name, link) VALUES (:name, :link)");
        $req->bindValue(':name', $name);
        $req->bindValue(':link', $link);
        $req->execute();
    }

    public function findOperator()
    {
        $req = $this->db->prepare("SELECT * FROM tour_operator");
        $req->execute();
        $operatorArray = $req->fetchAll(PDO::FETCH_ASSOC);        
        $operators = [];
        foreach ($operatorArray as $operatorsData) {
            $operators[] = new TourOperator($operatorsData);
        }
        return $operators;
    }








}






?>