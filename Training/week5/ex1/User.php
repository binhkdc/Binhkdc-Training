<?php

class User
{

    public $id;
    public $name;
    public $position;
    public $unit;
    public $Email;
    public $tel;
    public $role;
    public $stop_using;
    public $gender;
    public $search;
    public $male = '1';
    public $female = '0';

    /**
     * @return mixed
     */
    function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param mixed $unit
     */
    function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return mixed
     */
    function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    function setTel($tel)
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    function getStopUsing()
    {
        return $this->stop_using;
    }

    /**
     * @param mixed $stop_using
     */
    function setStopUsing($stop_using)
    {
        $this->stop_using = $stop_using;
    }

    /**
     * @return mixed
     */
    function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    function setGender($gender)
    {
        $this->gender = $gender;
    }

    function setSearch($search)
    {
        $this->search = $search;
    }

    function getSearch()
    {
        return $this->search;
    }

    function connectToDatabase()
    {
        return $conn = mysqli_connect("localhost", "root", "", "binhkdc_training");
    }

    function insertUser()
    {
        return mysqli_query($this->connectToDatabase(), "INSERT INTO `user`(`name`, `position`, `unit`, `Email`, `tel`, `role`, `stop_using`)   VALUES ('$this->name','$this->position','$this->unit','$this->Email','$this->tel','$this->role','$this->stop_using')");
    }

    function searchUser()
    {
//        tim theo name, email,tel
        return mysqli_query($this->connectToDatabase(), "SELECT * FROM `user` WHERE tel like '%$this->search%' OR  name like '%$this->search%' OR  Email like '%$this->search%';");
    }

    function updateUser()
    {
        return mysqli_query($this->connectToDatabase(), "UPDATE `user` SET id='$this->id', name ='$this->name',position ='$this->position', unit='$this->unit', Email='$this->Email',tel='$this->tel',role='$this->role',stop_using='$this->stop_using' where id='$this->id'");
    }

    function getById()
    {
        return mysqli_query($this->connectToDatabase(), "SELECT * FROM `user` WHERE id='$this->id'");
    }

    function deleteUser()
    {
        return mysqli_query($this->connectToDatabase(), "DELETE FROM `user` where `id` ='$this->id'");
    }

    function selectUser(){
        return mysqli_query($this->connectToDatabase(),"SELECT * FROM `user`");
    }
}

