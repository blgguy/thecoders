<?php
require_once('main.class.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dataAPI = new MAIN();

$_id = 'Florida'; //$_GET['id']; 

foreach ($dataAPI->citizenScienceGovOpenScienceProject()['_project'] as $key) {
  if ($key['project_id'] == 2) {
    $project_name         =  $key['project_name'];
    $project_url_external =  $key['project_url_external'];
    $project_description  =  $key['project_description'];
    $keywords             =  $key['keywords'];
    $fields_of_science    =  $key['fields_of_science'];

    $geographic_scope     = $key['geographic_scope'];
    $participant_age      = $key['participant_age'];
    $participation_tasks  = $key['participation_tasks'];
    $scistarter           = $key['scistarter'];
    $email                = $key['email'];
    $start_date           = $key['start_date'];

  }
}
?>
<br><br><br>

<h1 style="color:red;"><?php echo $project_name;?></h1>

<?php
  }else{
    echo 'ZERO';
  }
}


?>