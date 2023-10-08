<?php
require_once('main.class.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $dataAPI = new MAIN();

function get_shenavari_in_files($search, $type) {
    $files   = glob("*.json"); // Get names of all JSON files in a given path 
    $matches = [];

    foreach ($files as $file) { 

        $data = json_decode(file_get_contents($file), true); 

        foreach ($data as $row) {

            if (array_key_exists($type, $data) && $row[$type] == $search) {

                $matches[$file] = $search;
            }

        }
    }

    return $matches;
}


// Read and decode the JSON file
$jsonData = file_get_contents('citizenscience.gov.json');
$projects = json_decode($jsonData, true)['_project'];

// Search function
function searchProjects($projects, $searchTerm) {
    $results = array();

    // Iterate through the projects
    foreach ($projects as $project) {
        // Compare search term with project name or description
        if (stripos($project['project_name'], $searchTerm) !== false ||
            stripos($project['project_description'], $searchTerm) !== false) {
            $results[] = $project;
        }
    }

    return $results;
}

// Example usage
$searchTerm = 'weather'; // Enter your desired search term here
$results = searchProjects($projects, $searchTerm);

// Display the search results
foreach ($results as $result) {
    echo "Project Name: " . $result['project_name'] . "\n";
    echo "Description: " . $result['project_description'] . "\n";
    echo "Project URL: " . $result['project_url_on_catalog'] . "\n";
    echo "-----------------------------------\n";
}


?>