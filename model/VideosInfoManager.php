<?php
class VideosInfoManager
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
    * @param [ENTITYNAME] $ENTITY
    * @return self
    */
    public function addVideos(VideosInfo $video)
    {
    	$query = $this->getBdd()->prepare('INSERT INTO videoinfo(linkVideo, altVideo, videoId) VALUES(:linkVideo, :altVideo, :videoId)');
        $query->bindValue('linkVideo', $video->getLinkVideo(), PDO::PARAM_STR);
        $query->bindValue('altVideo', $video->getAltVideo(), PDO::PARAM_STR);
        $query->bindValue('videoId', $video->getVideoId(), PDO::PARAM_INT);
    	$query->execute();
    }

    /**
    * get TABLENAME
    *
    * @return self
    */
    public function getTABLENAME()
    {
    	$query = $this->getBdd()->prepare('SELECT * FROM TABLENAME');
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
    * get TABLENAME By Id
    *
    * @param [int] $id
    * @return self
    */
    public function getTABLENAMEById($id)
    {
    	$id = (int) $id;
    	$query = $this->getBdd()->prepare('SELECT * FROM TABLENAME WHERE id = :id');
    	$query->bindValue('id', $id, PDO::PARAM_INT);
    	$query->execute();
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