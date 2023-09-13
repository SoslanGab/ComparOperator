<?php




class DestinationManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addDestination($location, $price, $tourOperatorId)
    {
        $req = $this->db->prepare("INSERT INTO destination(location, price, tour_operator_id) VALUES (:location, :price, :tour_operator_id)");
        $req->bindValue(':location', $location);
        $req->bindValue(':price', $price);
        $req->bindValue(':tour_operator_id', $tourOperatorId); 
        $req->execute();
    }
    

    public function findDestination()
    {
        $req = $this->db->prepare("SELECT * FROM destination");
        $req->execute();
        $destinationArray = $req->fetchAll(PDO::FETCH_ASSOC);        
        $destinations = [];
        foreach ($destinationArray as $destinationData) {
            $destinations[] = new Destination($destinationData);
        }        
        return $destinations;
    }






}