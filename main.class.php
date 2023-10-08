<?php
class MAIN {
    public function citizenScienceGovOpenScienceProject() {
        $json = file_get_contents('citizenscience.gov.json');
        $data = json_decode($json,true);
        return $data;
    }

   

    // Search function
    public function searchProjects($searchTerm) {
        $jsonData = file_get_contents('citizenscience.gov.json');
        $projects = json_decode($jsonData, true)['_project'];

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

}


?>