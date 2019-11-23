<?php
class Videos
{
    protected $idVideo;
    protected $name;
    protected $videoDesc;
    protected $date;
    protected $category;
    protected $creator;
    protected $videoLike;
    protected $dislike;
    protected $videoCode;
    protected $vue;

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
     * Get the value of idVideo
     */ 
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Set the value of idVideo
     *
     * @param [int] $idVideo
     * @return self
     */ 
    public function setIdVideo(int $idVideo)
    {
        $idVideo = (int) $idVideo;
        $this->idVideo = $idVideo;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of desc
     */ 
    public function getVideoDesc()
    {
        return $this->videoDesc;
    }

    /**
     * Set the value of desc
     *
     * @return  self
     */ 
    public function setVideoDesc(string $videoDesc)
    {
        $this->videoDesc = $videoDesc;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of creator
     */ 
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set the value of creator
     *
     * @return  self
     */ 
    public function setCreator($creator)
    {
        $creator = (int) $creator;
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get the value of like
     */ 
    public function getVideoLike()
    {
        return $this->videoLike;
    }

    /**
     * Set the value of like
     *
     * @return  self
     */ 
    public function setVideoLike($videoLike)
    {
        $videoLike = (int) $videoLike;
        $this->videoLike = $videoLike;

        return $this;
    }

    /**
     * Get the value of dislike
     */ 
    public function getDislike()
    {
        return $this->dislike;
    }

    /**
     * Set the value of dislike
     *
     * @return  self
     */ 
    public function setDislike($dislike)
    {
        $dislike = (int) $dislike;
        $this->dislike = $dislike;

        return $this;
    }

    /**
     * Get the value of videoCode
     */ 
    public function getVideoCode()
    {
        return $this->videoCode;
    }

    /**
     * Set the value of videoCode
     *
     * @return  self
     */ 
    public function setVideoCode($videoCode)
    {
        $this->videoCode = $videoCode;

        return $this;
    }

    /**
     * Get the value of vue
     */ 
    public function getVue()
    {
        return $this->vue;
    }

    /**
     * Set the value of vue
     *
     * @return  self
     */ 
    public function setVue($vue)
    {
        $this->vue = $vue;

        return $this;
    }
}
