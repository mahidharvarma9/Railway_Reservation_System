<?php
                    if ( isset($_SESSION["error"]) ) {
                      echo('<p style="color:red">'.$_SESSION["error"]."</p>\n");
                      unset($_SESSION["error"]);
                    }
                    if ( isset($_SESSION["success"]) ) {
                      echo('<p style="color:green">'.$_SESSION["success"]."</p>\n");
                      unset($_SESSION["success"]);
                    }
                ?>






<?php


require_once "pdo.php";
if ( isset($_POST['train_no']) && isset($_POST['train_date']) && isset($_POST['num_AC']) && isset($_POST['num_Sleeper'])) {

$ins_train = "INSERT INTO available_trains(num_of_AC, num_of_Sleeper, day, train_number)
VALUES ('$_POST['num_AC']','$_POST['num_Sleeper']','$_POST['train_date']','$_POST['train_no']')";

$stmt = $pdo->query($ins_train);
$_SESSION["success"] = "Train added successfully..";
header( 'Location: Release_train.php' )
return;



}
?>
