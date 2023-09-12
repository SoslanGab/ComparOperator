<?php



class Destination
{   
    private $id;
    private $location;
    private $price;
    
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    
    public function hydrate(array $data){
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }
        if (isset($data['location'])) {
            $this->setLocation($data['location']);
        }
        if (isset($data['price'])) {
            $this->setPrice($data['price']);
        }
    } 


    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    public function getLocation()
    {
        return $this->location;

    }


    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }


    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}