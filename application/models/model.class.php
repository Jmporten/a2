<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 4/11/2018
 * Time: 4:19 PM
 */

abstract class model{
    protected $userID;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $role;

    public function __construct() {
        //we will revisit this
    }
    public function __set($name,$value) {
        $this->$name = $value;
    }
    public function __get($name) {
        return $this->$name;
    }
    public function __destruct() {
    }
}