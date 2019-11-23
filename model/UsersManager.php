<?php
class UsersManager
{
    protected $_bdd;

    public function __construct(PDO $bdd)
    {
    	$this->setBdd($bdd);
    }

    /**
    * get value of Bdd
    *
    * @return self
    */
    public function getBdd()
    {
    	return $this->_bdd;
    }

    /**
    * set value of Bdd
    *
    * @param [PDO] $bdd
    * @return self
    */
    public function setBdd(PDO $bdd)
    {
    	$this->_bdd = $bdd;
    	return $this;
    }

    /**
    * create TABLENAME
    *
    * @param [Users] $user
    * @return self
    */
    public function createUser(Users $user)
    {
    	$query = $this->getBdd()->prepare('INSERT INTO user(userName, userMail, userPassword, follow, dateCreate, accountValidate) VALUES(:userName, :userMail, :userPassword, :follow, :dateCreate, :accountValidate)');
        $query->bindValue('idUser', $user->getUserName(), PDO::PARAM_STR);
        $query->bindValue('userMail', $user->getUserName(), PDO::PARAM_STR);
        $query->bindValue('userPassword', $user->getUserName(), PDO::PARAM_STR);
        $query->bindValue('follow', $user->getUserName(), PDO::PARAM_INT);
        $query->bindValue('dateCreate', $user->getUserName(), PDO::PARAM_STR);
        $query->bindValue('accountValidate', $user->getUserName(), PDO::PARAM_INT);
    	$query->execute();
    }

    /**
    * get TABLENAME
    *
    * @return self
    */
    public function getUser($idUser)
    {
        $idUser = (int) $idUser;
    	$query = $this->getBdd()->prepare('SELECT * FROM user WHERE idUser = :idUser');
    	$query->execute();
    	$allTABLENAME = $query->fetchAll(PDO::FETCH_ASSOC);

    	$arrayOfTABLENAME = [];
    	foreach ($allTABLENAME as $TABLENAME)
    	{
    		$arrayOfTABLENAME[] = new Entity($TABLENAME);
    	}
    	return $arrayOfTABLENAME;
    }

    /**
     * get User By idUser
     *
     * @param [int] $idUser
     * @return self
     */
    public function getUserById($idUser)
    {
        $idUser = (int) $idUser;
    	$query = $this->getBdd()->prepare('SELECT * FROM user WHERE idUser = :idUser');
    	$query->bindValue('idUser', $idUser, PDO::PARAM_STR);
        $query->execute();
        $allUserInfo = $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayOfUser = [];
        foreach ($allUserInfo as $userInfo) {
            $arrayOfUser[] = new Users($userInfo);
        }
        return $arrayOfUser;
    }

    /**
    * delete TABLENAMEById
    *
    * @param [int] $id
    * @return self
    */
    public function deleteTABLENAMEById($id)
    {
    	$id = (int) $id;
    	$query = $this->getBdd()->prepare('DELETE FROM TABLENAME WHERE id = :id');
    	$query->bindValue('id', $id, PDO::PARAM_INT);
    	$query->execute();
    }

    /**
    * update TABLENAME
    *
    * @param [ENTITYNAME] $ENTITY
    * @return self
    */
    public function updateTABLENAME(ENTITYNAME $ENTITY)
    {
    	$query = $this->getBdd()->prepare('UPDATE TABLENAME SET TABLECOLUMN = :TABLECOLUMN WHERE id = :id');
    	$query->bindValue('TABLECOLUMN', $ENTITY->getTABLECOLUMN(), PDO::PARAM_STR);
    	$query->bindValue('id', $ENTITY->getId(), PDO::PARAM_INT);
    	$query->execute();
    }
}