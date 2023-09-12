<?php




class DestinationManager
{
    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addDestination($location, $price)
    {
        $req = $this->db->prepare("INSERT INTO destination(location, price) VALUES (:location, :price)");
        $req->bindValue(':name', $location);
        $req->bindValue(':gender', $price);
        $req->execute();
    }

    public function findDestination()
    {
        $req = $this->db->prepare("SELECT * FROM destination");
        $req->execute();
        $destinationArray = $req->fetchAll(PDO::FETCH_ASSOC);        
        $destinations = [];
        foreach ($destinationArray as $destinations) {
            $destinations[] = new TourOperator($destinations);
        }
        return $destinations;
    }






}