<?php
include_once(__DIR__ . "/Db.php");
class Service{

    private $serviceId;
    private $userId;
    private $description;
    private $image;
    
    private $title;


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

    /**
     * Get the value of serviceId
     */ 
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * Set the value of serviceId
     *
     * @return  self
     */ 
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

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
public function saveServices()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO services (user_id, title, description, image) VALUES (:user_id, :title, :description, :image)";
        $statement = $conn->prepare($sql);
        $user_id = $this->getUserId();
        $image = $this->getImage();
        $description = $this->getDescription();
       
        $title = $this->getTitle();

        $statement->bindValue(":user_id", $user_id);
        $statement->bindValue(":image", $image);
        $statement->bindValue(":description", $description);
     
        $statement->bindValue(":title", $title);
        $statement->execute();
    }
    public static function getFeedServices()
    {
        $conn = Db::getConnection();

        $sql = "SELECT *, services.id as serviceId FROM services JOIN users ON users.id=service.user_id WHERE  user_id != :user_id  ;";
        $statement = $conn->prepare($sql);
        $user_id = $_SESSION["userId"];

        $statement->bindValue(":user_id", $user_id);
        $statement->execute();
        $service = $statement->fetchAll();
        return $service;
    }

   
}
    ?>