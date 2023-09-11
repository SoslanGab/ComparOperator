<?php


class Review
{
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    private $id;
    private $message;
    private $author;
}