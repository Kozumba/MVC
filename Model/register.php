<?php
include 'autoload.php';
if ((isset($_POST['submit']))){
    $Sender = new Sql();
    $Sender->setResultsStmt($_POST["texting"],$_POST["numby"]);
    header("Location: ../View/index.php");
    
}
?>