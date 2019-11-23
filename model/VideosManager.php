<?php
class VideosManager
{
    private $_bdd;

    public function __construct(PDO $bdd)
    {
        $this->setBdd($bdd);
    }

    public function addVideo(Videos $allvideo)
    {
        $query = $this->getBdd()->prepare('INSERT INTO video(name, videoDesc, date, category, creator, videoCode) VALUES(:name, :videoDesc, :date, :category, :creator, :videoCode)');
        $query->bindValue(':name', $allvideo->getName(), PDO::PARAM_STR);
        $query->bindValue(':videoDesc', $allvideo->getVideoDesc(), PDO::PARAM_STR);
        $query->bindValue(':date', $allvideo->getDate(), PDO::PARAM_STR);
        $query->bindValue(':category', $allvideo->getCategory(), PDO::PARAM_STR);
        $query->bindValue(':creator', $allvideo->getCreator(), PDO::PARAM_INT);
        $query->bindValue(':videoCode', $allvideo->getVideoCode(), PDO::PARAM_STR);
        $query->execute();

        return $this->getBdd()->LastInsertId();
        // print("PDO::errorCode(): " . $query->errorCode());
    }

    /**
     * get Videos
     *
     * @return self
     */
    public function getVideos()
    {
        $query = $this->getBdd()->prepare('SELECT * FROM video LEFT JOIN user ON video.creator = user.idUser LEFT JOIN imageinfo ON video.idVideo = imageinfo.videoId LEFT JOIN videoinfo ON video.idVideo = videoinfo.videoId ORDER BY video.idVideo DESC LIMIT 12');
        $query->execute();
        $allVideos = $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayOfAll = [];
        $arrayOfVideos = [];
        $arrayOfUser = [];
        $arrayOfImageInfo = [];
        $arrayOfVideoInfo = [];
        foreach ($allVideos as $video) {
            $arrayOfVideos[] = new Videos($video);
            $arrayOfUser[] = new Users($video);
            $arrayOfImageInfo[] = new ImagesInfo($video);
            $arrayOfVideoInfo[] = new VideosInfo($video);
        }
        $arrayOfAll[] = $arrayOfVideos;
        $arrayOfAll[] = $arrayOfUser;
        $arrayOfAll[] = $arrayOfImageInfo;
        $arrayOfAll[] = $arrayOfVideoInfo;
        return $arrayOfAll;
    }

    /**
     * Get the value of _bdd
     */
    public function getBdd()
    {
        return $this->_bdd;
    }

    /**
     * Set the value of _bdd
     *
     * @return  self
     */
    public function setBdd(PDO $bdd)
    {
        $this->_bdd = $bdd;

        return $this;
    }
}
