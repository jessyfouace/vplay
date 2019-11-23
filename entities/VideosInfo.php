<?php
class VideosInfo
{
    protected $idVideoInfo;
    protected $linkVideo;
    protected $altVideo;
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
     * Get the value of idVideoInfo
     */ 
    public function getIdVideoInfo()
    {
        return $this->idVideoInfo;
    }

    /**
     * Set the value of idVideoInfo
     *
     * @return  self
     */ 
    public function setIdVideoInfo($idVideoInfo)
    {
        $idVideoInfo = (int) $idVideoInfo;
        $this->idVideoInfo = $idVideoInfo;

        return $this;
    }

    /**
     * Get the value of linkVideo
     */ 
    public function getLinkVideo()
    {
        return $this->linkVideo;
    }

    /**
     * Set the value of linkVideo
     *
     * @return  self
     */ 
    public function setLinkVideo($linkVideo)
    {
        $this->linkVideo = $linkVideo;

        return $this;
    }

    /**
     * Get the value of altVideo
     */ 
    public function getAltVideo()
    {
        return $this->altVideo;
    }

    /**
     * Set the value of altVideo
     *
     * @return  self
     */ 
    public function setAltVideo($altVideo)
    {
        $this->altVideo = $altVideo;

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