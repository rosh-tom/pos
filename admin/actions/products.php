<?php
    include '../../database/connection.php';

    $received_data = json_decode(file_get_contents("php://input"));
    $data = array();
    if($received_data){
        if($received_data -> action == 'fetchAllCategory'){
            $sql_query = "select id, product_category from tbl_product_category order by id desc";
            $statement = $connection -> prepare($sql_query);
            $statement -> execute();
            while($row = $statement -> fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            echo json_encode($data);
        }
    }else{
        echo "Unsa Ka Hello? ";
    }


?>