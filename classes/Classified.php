<?php

include_once(__DIR__ . "/Db.php");

class Classified
{
    private $ClassifiedId;
    private $userId;
    private $description;
   
    private $tags;
    private $title;
   


    /**
     * Get the value of postId
     */
    public function getClassifiedId()
    {
        return $this->ClassifiedId;
    }

    /**
     * Set the value of postId
     *
     * @return  self
     */
    public function setClassifiedId($classifiedId)
    {
        $this->ClassifiedId = $classifiedId;

        return $this;
    }
 /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     *
     * @return  self
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        //CHECK IF EMPTY
        if (empty($description)) {
            throw new Exception("Description may not be empty!");
        }

        $this->description = $description;

        return $this;
    }

   

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function cleanupTags($tags)
    {
        $tags = strtolower($tags);
        $tags = str_replace(' ', '', $tags);
        return $tags;
    }

    /**
     * Get the value of tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set the value of tags
     *
     * @return  self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get the value of created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set the value of created
     *
     * @return  self
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get the value of inappropriate
     */
    public function getInappropriate()
    {
        return $this->inappropriate;
    }

    /**
     * Set the value of inappropriate
     *
     * @return  self
     */
    public function setInappropriate($inappropriate)
    {
        $this->inappropriate = $inappropriate;

        return $this;
    }

    /**
     * Get the value of Location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of Location
     *
     * @return  self
     */
   
    public function saveClassified()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO classifieds (user_id, title, description, tags) VALUES (:user_id, :title, :description, :tags)";
        $statement = $conn->prepare($sql);
        $user_id = $this->getUserId();
        $tags = $this->getTags();
        $description = $this->getDescription();
       
        $title = $this->getTitle();

        $statement->bindValue(":user_id", $user_id);
      
        $statement->bindValue(":description", $description);
     
        $statement->bindValue(":title", $title);
        $statement->bindValue(":tags", $tags);
        $statement->execute();
    }
  
   
  
  

   
   
}
