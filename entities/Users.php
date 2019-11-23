<?php
class Users
{
    protected $idUser;
    protected $userName;
    protected $userMail;
    protected $userPassword;
    protected $follow;
    protected $dateCreate;
    protected $accountValidate;

    public function __construct(array $array)
    {
    	$this->hydrate($array);
    }

    public function hydrate(array $donnees)
    {
    	foreach ($donnees as $key => $value) {
    		$method = 'set' . ucfirst($key);
    		if (method_exists($this, $method)) {
    			$this->$method($value);
    		}
    	}
    }

    /**
     * Get the value of idUser
     */ 
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set the value of idUser
     *
     * @return  self
     */ 
    public function setIdUser($idUser)
    {
        $idUser = (int) $idUser;
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @return  self
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of userMail
     */ 
    public function getUserMail()
    {
        return $this->userMail;
    }

    /**
     * Set the value of userMail
     *
     * @return  self
     */ 
    public function setUserMail($userMail)
    {
        $this->userMail = $userMail;

        return $this;
    }

    /**
     * Get the value of userPassword
     */ 
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set the value of userPassword
     *
     * @return  self
     */ 
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get the value of follow
     */ 
    public function getFollow()
    {
        return $this->follow;
    }

    /**
     * Set the value of follow
     *
     * @return  self
     */ 
    public function setFollow($follow)
    {
        $follow = (int) $follow;
        $this->follow = $follow;

        return $this;
    }

    /**
     * Get the value of dateCreate
     */ 
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Set the value of dateCreate
     *
     * @return  self
     */ 
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get the value of accountValidate
     */ 
    public function getAccountValidate()
    {
        return $this->accountValidate;
    }

    /**
     * Set the value of accountValidate
     *
     * @return  self
     */ 
    public function setAccountValidate($accountValidate)
    {
        $accountValidate = (int) $accountValidate;
        $this->accountValidate = $accountValidate;

        return $this;
    }
}