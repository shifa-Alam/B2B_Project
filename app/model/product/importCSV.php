<?php
function add_byCSV(array $data){
    global $db_connection;
    $table_name = get_table_name('products');
    $SQL = "INSERT INTO {$table_name}(title,inventory,price) VALUES('{$data['title']}', '{$data['inventory']}','{$data['price']}')";
    
    return $db_connection->query($SQL); 

}