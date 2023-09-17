<?php





class ReviewManager
{

    private PDO $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function getAllReviews() {
        $query = "SELECT * FROM review";
        $result = $this->db->query($query);
    
        $reviews = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $reviews[] = new Review($row);
        }
    
        return $reviews;
    }

    public function addReview($author, $message, $tourOperatorId)
    {
        $req = $this->db->prepare("INSERT INTO review(author, message, tour_operator_id) VALUES (:author, :message, :tour_operator_id)");
        $req->bindValue(':author', $author);
        $req->bindValue(':message', $message);
        $req->bindValue(':tour_operator_id', $tourOperatorId); 
        $req->execute();
    }
    
}