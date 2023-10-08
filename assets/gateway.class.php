<?php
require_once('db.class.php');

class Gateway extends Engine
{
    public function genRandomKeys(INT $limit = 6)
    {
        $Dtt    = time();
        $keys   = '987654321'.$Dtt.rand(2346,9178);
        return  substr(str_shuffle($keys), 0, $limit);
    }

    // Verify Password
    public function PassVer($pass, $uid)
    {

        $pass       = htmlentities($uid, ENT_QUOTES, "UTF-8");
        $uid        = htmlentities($pass, ENT_QUOTES, "UTF-8");
        $query      = "SELECT UPASS from `_crew` WHERE `UNAME`='".$uid."'";
        $result     = $this->Jigo->query($query) or die($this->Jigo->error);    
        $user_data  = $result->fetch_array(MYSQLI_ASSOC);
        $count_row  = $result->num_rows;
    
        if ($count_row == 1) {
            $hash = $user_data['UPASS'];
            if (password_verify($pass, $hash)) {
                return true;
            }else {
                return false;
            }
        }else{
            return false;
        }
    }


    /*** for login process ***/
    public function check_login($Username, $password){
        $Usernamee  = htmlentities($Username, ENT_QUOTES, "UTF-8");
        $password       = htmlentities($password, ENT_QUOTES, "UTF-8");

        $query = "SELECT * from `_crew` WHERE `UNAME` ='".$Usernamee."'";
        $result = $this->Jigo->query($query) or die($this->Jigo->error);    
        $user_data = $result->fetch_array(MYSQLI_ASSOC); //$result->fetch_assoc(); $result->fetch_array(MYSQLI_ASSOC);
        $count_row = $result->num_rows;
       

        if ($count_row == 1) {
            $hash    = $user_data['UPASS'];
            if (password_verify($password, $hash)) {
                $_SESSION['login675gNASAAPPCHALLENGE']  = true; // this login var will use for the session thing
                $_SESSION['uid']        = $user_data['USERID'];
                $_SESSION['logInr7778787NASAAPPCHALLENGE'] = $user_data;
                return 1; // password verify
            }else {
                return 2; // password wrong
            }
            return true;
        }else{
            return 3; // user not found
        }
    }
    

    // get started session 
    public function get_session(){
        return $_SESSION['logInr7778787NASAAPPCHALLENGE'];
    }

    // unset all sessions

    public function user_logout() {
        $_SESSION['login675gNASAAPPCHALLENGE'] = FALSE;
        unset($_SESSION['logInr7778787NASAAPPCHALLENGE']);
        session_destroy();
        header('location: ../login.php');
    }

}


?>