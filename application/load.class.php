<?php
/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 4/11/2018
 * Time: 4:30 PM
 */

class Load{
    function view($file_name, $data=null){

        if(is_array($data)){
            extract($data);
        }

        include 'views/'.$file_name;
    }
}