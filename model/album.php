<?php
/**
 * Created by PhpStorm.
 * User: Dang Quoc Dat
 * Date: 2/19/2017
 * Time: 11:21 PM
 */
class album{
    private $id;
    private $name;
    private $userId;

    function __construct($id, $name, $userId )
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->name = $name;
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
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }


}