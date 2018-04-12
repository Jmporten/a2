<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 4/11/2018
 * Time: 4:26 PM
 */

class controller {
    public $load;
    public $users;

    function __construct(){

        $this->load = new Load();
        $this->users = new Users();
        $this->home();
    }

    function home(){
        $this->users->userID = 'jmporten';
        $this->users->firstname = 'John ';
        $this->users->lastname = 'Porten';
        $this->users->email = 'jmporten@iupui.edu';
        $this->users->role = 'student';

        $data = $this->users->getName();
        $this->load->view('view.php', $data);

    }

}