<?php


class Review
{
    
    private $id;
    private $message;
    private $author;
    private $tour_operator_id;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
    public function hydrate(array $data){
        if (isset($data['id'])) {
            $this->setId($data['id']);
        }
        if (isset($data['message'])) {
            $this->setMessage($data['message']);
        }
        if (isset($data['author'])) {
            $this->setAuthor($data['author']);
        }
        if (isset($data['tour_operator_id'])) { 
            $this->setTour_operator_id($data['tour_operator_id']);
        }
    } 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of tour_operator_id
     */ 
    public function getTour_operator_id()
    {
        return $this->tour_operator_id;
    }

    /**
     * Set the value of tour_operator_id
     *
     * @return  self
     */ 
    public function setTour_operator_id($tour_operator_id)
    {
        $this->tour_operator_id = $tour_operator_id;

        return $this;
    }
}

