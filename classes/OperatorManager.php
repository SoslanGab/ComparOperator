<?php




class OperatorManager
{


    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
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