<?php
include_once(__DIR__ . "/Db.php");

class User
{
    private $userId;
    private $firstname;
    private $lastname;
    private $password;
    private $email;
    private $picture;
    private $streetname;
    private $streetnumber;
    private $city;
    private $krediet;

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
     * Get the value of picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
    
    /**
     * Get the value of krediet
     */ 
    public function getKrediet()
    {
        return $this->krediet;
    }

    /**
     * Set the value of krediet
     *
     * @return  self
     */ 
    public function setKrediet($krediet)
    {
        $this->krediet = $krediet;

        return $this;
    }

    /**
     * Get the value of streetname
     */ 
    public function getStreetname()
    {
        return $this->streetname;
    }

    /**
     * Set the value of streetname
     *
     * @return  self
     */ 
    public function setStreetname($streetname)
    {
        $this->streetname = $streetname;

        return $this;
    }

    /**
     * Get the value of streetnumber
     */ 
    public function getStreetnumber()
    {
        return $this->streetnumber;
    }

    /**
     * Set the value of streetnumber
     *
     * @return  self
     */ 
    public function setStreetnumber($streetnumber)
    {
        $this->streetnumber = $streetnumber;

        return $this;
    }

    /**
     * Get the value of city
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */ 
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
    

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname($firstname)
    {
        if (empty($firstname)) {
            throw new Exception("First name may not be empty!");
        }
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname($lastname)
    {
        if (empty($lastname)) {
            throw new Exception("Last name may not be empty!");
        }
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        if (empty($password)) {
            throw new Exception("Password may not be empty!");
        }
        $this->password = $password;
        return $this;
    }

    public function hashPassword()
    {
        $password = $this->getPassword();
        $options = [
            'cost' => 14,
        ];
        $this->password = password_hash($password, PASSWORD_DEFAULT, $options);
        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        if (empty($email)) {
            throw new Exception("Email may not be empty!");
        }
        $this->email = $email;

        return $this;
    }

    public function checkEmail()
    {
        $email = $this->getEmail();
        $conn = Db::getConnection();
        $statement = $conn->prepare("select * from users where email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        $result = $statement->fetch();
        if ($result != false) {
            throw new Exception("Email is already being used, please try a different one");
        }
        $this->email = $email;

        return $this;
    }

    

    public function save()
    {
        $conn = Db::getConnection();

        $sql = "INSERT INTO users (firstname, lastname, email, password, streetname, streetnumber, city, krediet) VALUES (:firstname, :lastname, :email, :password, :streetname, :streetnumber, :city,  +5)";
 
        $statement = $conn->prepare($sql);
       
        $firstname = $this->getFirstname();
        $lastname = $this->getLastname();
        $email = $this->getEmail();
        $password = $this->getPassword();
        $streetname = $this->getStreetname();
        $streetnumber = $this->getStreetnumber();
        $city = $this->getCity();
        $krediet = $this->getKrediet();

        $statement->bindValue(":firstname", $firstname);
        $statement->bindValue(":lastname", $lastname);
        $statement->bindValue(":email", $email);
        $statement->bindValue(":password", $password);
        $statement->bindValue(":streetname", $streetname);
        $statement->bindValue(":streetnumber", $streetnumber);
        $statement->bindValue(":city", $city);
      
        $statement->execute();
    }

    public function canLogin()
    {
        $conn = Db::getConnection();

        $sql = "SELECT email, password FROM users WHERE email = :email";
        $statement = $conn->prepare($sql);
        $email = $this->getEmail();
        $password = $this->getPassword();
        $statement->bindValue(":email", $email);
        $statement->execute();
        $result = $statement->fetchAll();
        $hash = $result[0]['password'];

        if (!password_verify($password, $hash)) {
            throw new Exception("email or password is incorrect!");
        }
    }

   

    //Get current active user
    public function getLoggedUser($email)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(":email", $email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            throw new Exception(" No user is logged in.");
        }
        return $user;
    }

    public function getUserInfo($userId)
    {
        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT * FROM users WHERE id = :userId");
        $statement->bindValue(":userId", $userId);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if (empty($user)) {
            throw new Exception(" No user2 is logged in.");
        }
        return $user;
    }

    

    public function verifyPassword($currentUserId)
    {

        $conn = Db::getConnection();
        $statement = $conn->prepare("SELECT password FROM users WHERE id = :currentUserId");

        $password = $this->getPassword();

        $statement->bindValue(":currentUserId", $currentUserId);
        $statement->execute();

        $result = $statement->fetchAll();
        $hash = $result[0]['password'];

        if (!password_verify($password, $hash)) {
            throw new Exception("Current password is incorrect!");
        }
    }
    public function updateInfo($currentUserId)
    {

        $conn = Db::getConnection();
        $statement = $conn->prepare("UPDATE users SET  picture = :picture WHERE id = :currentUserId");
        $statement->bindValue(":currentUserId", $currentUserId);

        
        $picture = $this->getPicture();

        
        $statement->bindValue(":picture", $picture);

        $user = $statement->execute();

        return $user;
    }
    public function updatePassword($currentUserId)
    {
        $conn = Db::getConnection();

        $statement = $conn->prepare("UPDATE users SET password = :password WHERE id = :currentUserId");
        $statement->bindValue(":currentUserId", $currentUserId);

        $password = $this->getPassword();
        $statement->bindValue(":password", $password);

        $user = $statement->execute();

        return $user;
    }
    
    
   


    public function uploadProfilePicture($profilepicture)
    {
        if (!empty($_FILES["profilePicture"]["name"])) {
            $target_dir = "uploads/profilePictures/";
            $file = $profilepicture;
            $path = pathinfo($file);
            $firstname = $this->getFirstname();
            $ext = $path["extension"];
            $temp_name = $_FILES["profilePicture"]["tmp_name"];
            $filename = $firstname . "_" . "profilepicture" . "_" . mt_rand(100000, 999999);
            $path_filename_ext = $target_dir . $filename . "." . $ext;

            while (file_exists($path_filename_ext)) {
                $filename = $firstname . "_" . "profilepicture" . "_" . mt_rand(100000, 999999);
                $path_filename_ext = $target_dir . $filename . "." . $ext;
            }
            move_uploaded_file($temp_name, $path_filename_ext);
            if (!$path_filename_ext) {
                throw new Exception("Something went wrong when uploading the picture, please try again later");
            }
        }
        return $path_filename_ext;
    }

public function updatekrediet($currentUserId)
    {
        $conn = Db::getConnection();
        
        $statement = $conn->prepare("UPDATE users SET krediet = :krediet WHERE id = :currentUserId");
        $statement->bindValue(":currentUserId", $currentUserId);
        $krediet = $this->getKrediet();
        $statement->bindValue(":krediet", $krediet);


        $user = $statement->execute();

        return $user;
    }
   

}
