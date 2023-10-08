<?php
require_once('db.class.php');

class Output extends Engine
{
    public function coutTables($table)
    {
        $sql = "SELECT * FROM `$table`";
        $query = $this->Jigo->query($sql);
        $tableCount = $query->num_rows;

        return $tableCount;
    }

    public function vById($tbl, $CatId)
    {
		$sql = "SELECT * FROM `".$tbl."` WHERE `id` =".$CatId;

        $array = array();

        $query = $this->Jigo->query($sql) or die($this->Jigo->error);
        if($query->num_rows > 0){
           while ($row = $query->fetch_array()) {
               $array[] = $row;
           }
           return $array;
       }else{
           return false;
       }
    }

    public function v($table)
    {
        $sql = "SELECT * FROM ".$table;
        $array = array();
        $query = $this->Jigo->query($sql) or die($this->Jigo->error);
         if($query->num_rows > 0){
            while ($row = $query->fetch_array()) {
                $array[] = $row;
            }
            return $array;
        }else{
            return false;
        }
    }

    public function vL($table)
    {
        $sql = "SELECT * FROM ".$table." LIMIT 15";
        $array = array();
        $query = $this->Jigo->query($sql) or die($this->Jigo->error);
         if($query->num_rows > 0){
            while ($row = $query->fetch_array()) {
                $array[] = $row;
            }
            return $array;
        }else{
            return false;
        }
    }

    public function AuthId($table, $id)
    {
        // Check the Requested id is valid or not
        $sql = "SELECT `id` FROM ".$table;
        $sql .= " WHERE `id` = ".$id;
        $array = array();
        $query = $this->Jigo->query($sql) ; //or die($this->Jigo->error);
        
        while ($row = $query->fetch_array()) {
            $array[] = $row;
        }
        foreach ($array as $row) {
            return true;
        }
    }
}


?>