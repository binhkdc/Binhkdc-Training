<?php
include 'UserModel.php';
class UserController
{
    public $id;

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
    public function addUsers()
    {
        $User = new UserModel();
        $User->setName($_POST['name']);
        $User->setPosition($_POST['position']);
        $User->setUnit($_POST['unit']);
        $User->setEmail($_POST['Email']);
        $User->setTel($_POST['tel']);
        $User->setRole($_POST['role']);
        if (empty($_POST['stop_using'])) {
            $User->setStopUsing('0');
        } else {
            $User->setStopUsing($_POST['stop_using']);
        }
        $User->insertUser();
        header('location:ListedList.php');
    }

    public function showDatabase(){
        $User = new UserModel();
        return $User->selectUser();
    }

    public function update(){
        $User = new UserModel();
        $User->setId($_GET['id']);
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

        header('location:ListedList.php');
    }
    public function delete(){
        $User=new UserModel();
        $User->setId();
        $User->getById();
        $User->deleteUser();
        header('location:ListedList.php');
    }
}