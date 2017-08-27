
<?php



function db_connect(){

    $db = mysqli_connect("localhost", "john","challenge","cs230");
    confirm_db_connect();
    return $db;
}

function db_disconnect($connection){
    if(isset($connection)){
    mysqli_close($connection);
    }
}

function confirm_db_connect(){
    if(mysqli_connect_error()){
        $msg = "Database connection failed: ";
        $msg .= mysqli_connect_error();
        $msg .=" (". mysqli_connect_error();
        $msg .=" (".mysqli_connect_error().")";
        exit($msg);
    }
}
function confirm_result_set($result_set){
    if(!$result_set){
        exit("Database query failed.");
    }
}

function db_escape($connection, $string){
    return mysqli_real_escape_string($connection, $string);
}

 ?>
