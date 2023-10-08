<?php
require_once('main.class.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$data = new MAIN();
$refrence = $data->citizenScienceGovOpenScienceProject()['home_page_url'];
echo "<h2> $refrence <br></h2>" ;
$i = 0;
foreach ($data->citizenScienceGovOpenScienceProject()['_project'] as $key) {
  
    if(++$i > 5) break;
    echo "<h1>".$key['project_name']."</h1><br>";
}
    
//echo count($data->citizenScienceGovOpenScienceProject()['_project']);
?>