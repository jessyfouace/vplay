<?php
class ImagesInfo
{
    protected $idImage;
    protected $link;
    protected $alt;
    protected $videoId;

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
     * Get the value of idImage
     */ 
    public function getIdImage()
    {
        return $this->idImage;
    }

    /**
     * Set the value of idImage
     *
     * @return  self
     */ 
    public function setIdImage($idImage)
    {
        $idImage = (int) $idImage;
        $this->idImage = $idImage;

        return $this;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     *
     * @return  self
     */ 
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of alt
     */ 
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set the value of alt
     *
     * @return  self
     */ 
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get the value of videoId
     */ 
    public function getVideoId()
    {
        return $this->videoId;
    }

    /**
     * Set the value of videoId
     *
     * @return  self
     */ 
    public function setVideoId($videoId)
    {
        $videoId = (int) $videoId;
        $this->videoId = $videoId;

        return $this;
    }
}