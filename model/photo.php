<?php

/**
 * Created by PhpStorm.
 * User: Dang Quoc Dat
 * Date: 2/19/2017
 * Time: 11:21 PM
 */
class photo
{
    private $id;
    private $albumId;
    private $photoName;
    private $photoURL;

    function __construct($id, $albumId, $photoName, $photoURL)
    {
        $this->albumId = $albumId;
        $this->id = $id;
        $this->photoName = $photoName;
        $this->photoURL = $photoURL;
    }

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->albumId;
    }

    /**
     * @param mixed $albumId
     */
    public function setAlbumId($albumId)
    {
        $this->albumId = $albumId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPhotoName()
    {
        return $this->photoName;
    }

    /**
     * @param mixed $photoName
     */
    public function setPhotoName($photoName)
    {
        $this->photoName = $photoName;
    }

    /**
     * @return mixed
     */
    public function getPhotoURL()
    {
        return $this->photoURL;
    }

    /**
     * @param mixed $photoURL
     */
    public function setPhotoURL($photoURL)
    {
        $this->photoURL = $photoURL;
    }


}