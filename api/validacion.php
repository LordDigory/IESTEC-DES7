<?php  $con = mysqli_connect("localhost", "root", "", "iestec");
$ticket = $_POST['tiquete'];

$statement = mysqli_prepare($con, "UPDATE entrada SET asistencia= 'SI' WHERE cod_entrada = ?");
mysqli_stmt_bind_param($statement, "s", $ticket);
mysqli_stmt_execute($statement);

    $response = array();
    $response["success"] = false;  
    
    if(mysqli_stmt_affected_rows($statement)==1){
        $response["success"] = true;  
    }
    
    echo json_encode($response);

?>