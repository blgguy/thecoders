<?php
class MAIN {
    public function citizenScienceGovOpenScienceProject() {
        $json = file_get_contents('citizenscience.gov.json');
        $data = json_decode($json,true);
        return $data;
    }
}


?>