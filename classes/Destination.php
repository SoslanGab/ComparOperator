<?php



class Destination
{
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private $id;
    private $location;
    private $price;
}