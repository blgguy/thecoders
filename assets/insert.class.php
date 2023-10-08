<?php
require_once('db.class.php');

class Input extends Engine
{
    public function randKey()
    {   
        $kys = '9876543210ABCDEFGHJKLMNOPQRSTUVWXYZ';
        $key = rand(56789, 49123);
        $kyss = substr(str_shuffle($kys), 0, 6).$key; 
        return $kyss;
    }

    public function contributors($skills, $availability, $typeOfProj){
        $dttt = time();
        $sql    =  "INSERT INTO `contributors` (`skills`, `availability`, `typeOfProj`, `date`) VALUES ('$skills', '$availability', '$typeOfProj', '$dttt')";
        $query  =   $this->Jigo->query($sql) or die($this->Jigo->error);
        if ($query) {
            return true;
        }else{
            false;
        }
    } 

    public function creators($projectDescribtion, $typeOfCollaborator, $scopeOfWork, $SkillsNeed){
        $dttt = time();

        $sql    =  "INSERT INTO `creators` (`projectDescribtion`, `typeOfCollaborator`, `scopeOfWork`, `SkillsNeed`, `date`) VALUES ('$projectDescribtion', '$typeOfCollaborator', '$scopeOfWork', '$SkillsNeed', '$dttt')";
        $query  =   $this->Jigo->query($sql) or die($this->Jigo->error);
        if ($query) {
            return true;
        }else{
            false;
        }
    } 

    public function reG($username, $password){
        $dttt = time();
        $sql    =  "INSERT INTO `_crew` (`UNAME`,  `UPASS`, `dATECREATED`) VALUES ('$username', '$password', '$dttt')";
        $query  =   $this->Jigo->query($sql) or die($this->Jigo->error);
        if ($query) {
            return true;
        }else{
            false;
        }
    } 

}


?>