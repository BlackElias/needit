<?php

include_once(__DIR__ . "/Db.php");

class Lend
{
    private $post_id;
    private $user_id;
    private $start_date;
    private $end_date;


  /**
     * Get the value of post_id
     */ 
    public function getPost_id()
    {
        return $this->post_id;
    }

    /**
     * Set the value of post_id
     *
     * @return  self
     */ 
    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;

        return $this;
    }

    /**
     * Get the value of user_id
     */ 
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */ 
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of start_date
     */ 
    public function getStart_date()
    {
        return $this->start_date;
    }

    /**
     * Set the value of start_date
     *
     * @return  self
     */ 
    public function setStart_date($start_date)
    {
        $this->start_date = $start_date;

        return $this;
    }

    /**
     * Get the value of end_date
     */ 
    public function getEnd_date()
    {
        return $this->end_date;
    }

    /**
     * Set the value of end_date
     *
     * @return  self
     */ 
    public function setEnd_date($end_date)
    {
        $this->end_date = $end_date;

        return $this;
    }
    public function saveDate()
    {
        $conn = Db::getConnection();
        $sql = "INSERT INTO lend (user_id, post_id, start_date, end_date) VALUES (:user_id, :post_id, :start_date, :end_date)";
        $statement = $conn->prepare($sql);
        $user_id = $this->getUser_id();
        $postId = $this->getPost_id();
        $start_date = $this->getStart_date();
        $end_date = $this->getEnd_date();
        
        
       
        $statement->bindValue(":user_id", $user_id);
         $statement->bindValue(":post_id", $postId);
        $statement->bindValue(":start_date", $start_date );
        $statement->bindValue(":end_date", $end_date);
       
    }

    
}
    ?>