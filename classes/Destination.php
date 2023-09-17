<?php



class Destination
{   
    private $id;
    private $location;
    private $price;
    private $operator_id;
    
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
        if (isset($data['operator_id'])) {
            $this->setOperator_id($data['operator_id']);
        }
    } 
  
    // public function getOperatorLink(OperatorManager $operatorManager)
    // {
    //     var_dump($this->operator_id); // Vérifiez la valeur de $this->operator_id
    //     $operator = $operatorManager->findOperatorById($this->operator_id);
    //     var_dump($operator); 
    
    //     if ($operator) {
    //         return $operator->getLink();
    //     } else {
    //         return "#";
    //     }
    // }
    
    
    
    
    
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

    /**
     * Get the value of operator_id
     */ 
    public function getOperator_id()
    {
        return $this->operator_id;
    }

    /**
     * Set the value of operator_id
     *
     * @return  self
     */ 
    public function setOperator_id($operator_id)
    {
        $this->operator_id = $operator_id;

        return $this;
    }
}