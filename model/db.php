<?php 

    $dbhost = '127.0.0.1';
    $dbname = 'event_management_system';
    $dbuser = 'root';
    $dbpassword = '';

    //build a function to connect with database
    function getConnection(){
        global $dbhost;
        global $dbname;
        global $dbpassword;
        global $dbuser;

        $con = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
        return $con;
    }
?>