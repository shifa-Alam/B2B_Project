<?php
if(is_post()){
    $target = "temp/"; 
    $target = $target . basename( $_FILES['file']['name']) ;    

    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){

        if(is_uploaded_file($_FILES['file']['tmp_name'])){            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');            
            //skip first line
            fgetcsv($csvFile);           
            //parse data from csv file line by line


            while(($line = fgetcsv($csvFile)) !== FALSE){ 
                $db_return = add_byCSV(
                    array(
                        
                        'title'         => $line[0],
                        'inventory'     => $line[1],
                        'price'         => $line[2],
                        
                        
                    )
                );
                
            } 
            if($db_return === true) $MESSAGE[] = array('type' => 'success', 'message' => 'Product has been saved successfully');
                else $MESSAGE[] = array('type' => 'error', 'message' => 'Product could not been saved.');           
            //close opened csv file
            fclose($csvFile);
            
        }

    }

}


