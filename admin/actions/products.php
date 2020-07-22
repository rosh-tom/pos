<?php
    require '../../database/connection.php';

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

        }elseif ($received_data -> action == 'addCategory') {
            $data = array(
                'txtbx_addCategory' => $received_data -> txtbx_addCategory
            );
            $sql_query = "insert into tbl_product_category(product_category) values(:txtbx_addCategory)";
            $statement = $connection -> prepare($sql_query);
            if ($statement -> execute($data)) {
                $output = array(
                    'message' => 'New Category Inserted',
                    'alert' => 'success'
                );
            }else {
                $output = array(
                    'message' => "Error!. Category name might already be existed. ",
                    'alert' => 'danger'
                );
            }
            echo json_encode($output);
        }elseif ($received_data -> action == 'del_category') {
            $id = $received_data -> id;
            $sql_query = "delete from tbl_product_category where id = '" .$id. "'";
            $statement = $connection -> prepare($sql_query);
            if ($statement -> execute()) {
                $output = array(
                    'message' => 'Category Successfully Deleted.',
                    'alert' => 'success'
                );
            }else{
                $output = array(
                    'message' => 'Error!. Something went wrong.',
                    'alert' => 'danger'
                );
            }
            echo json_encode($output);
        }elseif ($received_data -> action == 'fetchAllSupplier') {
            $sql_query = "select * from tbl_product_supplier order by id desc";
            $statement = $connection -> prepare($sql_query);
            $statement -> execute();
            while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
            echo json_encode($data);

        }
         
    }else{
        echo "Unsa Ka Hello? ";
    }


?>