<?php 
    session_start();
    require_once('../model/userModel.php');
    
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $username = $_REQUEST['username'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    $conPass = $_REQUEST['conPass'];
    $userType = isset($_REQUEST['userType']) ? $_REQUEST['userType'] : '';
    $gender = isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
   

    //Functions for validation
    function isPassValid($password){
        $specialChar=['@','#','$','%'];
        if(strlen($password) >= 4){
            for($i=0;$i<strlen($password);$i++){
                if(in_array($password[$i] , $specialChar)){
                    return true;
                }
            }
        }
        return false;
    }

    function isPhoneValid($phone){
        if (strlen($phone) === 10) {
            $prefix = substr($phone, 0, 2); 
            $allowedPrefixes = ['13', '14', '15', '16', '17', '18', '19'];
            if (in_array($prefix, $allowedPrefixes)) {
                return true;
            }
        }
        return false;
    }

    //conditions

    if(isPassValid($password) && isPhoneValid($phone) && $password==$conPass){

        $value = registration($name,$email,$username,$phone,$password,$userType,$gender);
        
        if($value){
            
            $_SESSION['username'] = $username;
            header('location: ../view/login.php');
        }
        else{
            echo 'invalid';
        }
    }
    else{
        echo 'Error! Please try again.';
    }
?>