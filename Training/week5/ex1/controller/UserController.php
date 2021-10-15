<?php

namespace controller\UserController;

use model\User\User;

include __DIR__ . '/../model/User.php';

class UserController
{
    public $id;
    public $search;

    /**
     * @return mixed
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * @param mixed $search
     */
    public function setSearch($search)
    {
        $this->search = $search;
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
    public function getId()
    {
        return $this->id;
    }
    public function showDatabase()
    {
        $User = new User();
        return $User->selectUser();
    }

    public function edit(){
        $User=new User();
        $User->setId($this->id);
        $query = $User->getById();
        return mysqli_fetch_array($query);
    }

    public function delete(){
        $User=new User();
        $User->setId($this->id);
        $User->getById();
        $User->deleteUser();
        header('location:index.php');
    }

    public function add(){
        $User = new User();
        $User->setName($_POST['name']);
        $User->setPosition($_POST['position']);
        $User->setUnit($_POST['unit']);
        $User->setEmail($_POST['Email']);
        $User->setTel($_POST['tel']);
        $User->setRole($_POST['role']);
        if(empty($_POST['stop_using'])){
            $User->setStopUsing('0');
        }else{
            $User->setStopUsing($_POST['stop_using']);
        }
        $User->insertUser();
        header('location:index.php');
    }

    public function search(){
        $User=new User();
        $User->setSearch($this->search);
        return  $User->searchUser();
    }

    public function update(){
        $User = new User();
        $User->setId($this->id);
        $User->setName($_POST['name']);
        $User->setPosition($_POST['position']);
        $User->setUnit($_POST['unit']);
        $User->setEmail($_POST['Email']);
        $User->setTel($_POST['tel']);
        $User->setRole($_POST['role']);
        if(empty($_POST['stop_using'])){
            $User->setStopUsing('0');
        }else{
            $User->setStopUsing($_POST['stop_using']);
        }
        $User->updateUser();

        header('location:index.php');
    }
}