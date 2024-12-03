<?php

function get_csv_files($file, string $template){

    // Ouverture du fichier
    $csv_file = fopen($file, 'r');

    // Ignorer la première ligne (en-têtes)
    fgetcsv($csv_file);

    // Tableau pour stocker les projets
    $files = [];

    // Lecture des lignes du fichier CSV
    while (($data = fgetcsv($csv_file, 1000, ';')) !== FALSE){
        if($template === 'project'){
            $files[] = [
                'id' => $data[0],
                'name' => $data[1],
                'client' => $data[2],
                'technologies' => $data[3],
                'description' => $data[4],
                'date' => $data[5],
                'url' => $data[6],
                'image' => $data[7]
            ];
        }elseif($template === 'address'){
            $files[] = [
                'id' => $data[0],
                'street_address' => $data[1],
                'postal_code' => $data[2],
                'city' => $data[3],
                'country' => $data[4]
            ];
        }elseif($template === 'time_slot'){
            $files[] = [
                'id' => $data[0],
                'day_of_the_week' => $data[1],
                'am_start' => $data[2],
                'am_end' => $data[3],
                'pm_start' => $data[4],
                'pm_end' => $data[5]
            ];
        }
    }

    // Fermeture du fichier
    fclose($csv_file);

    return $files;
}