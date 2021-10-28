<?php
class Sql extends Config{

  /*  public function getResults(){
        $sql= "SELECT * FROM `data`";
        $stmt= $this->sendConfig()->query($sql);
        while($row = $stmt->fetch()){
            echo $row["text"]."</br>Da numbas gotten are: ". $row["numba"];
        }
    } */
    public function getResultsStmt(){
        $sql= "SELECT * FROM `data`";
        $stmt= $this->sendConfig()->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_LAZY)){
            echo $row["text"]."</br>Da numbas gotten are: ". $row["numba"]."</br>";
        }

    }
    public function setResultsStmt($text,$number){
        $sql= "INSERT INTO `data`(text,numba) VALUES (?,?)";
        $stmt= $this->sendConfig()->prepare($sql);
        $stmt->execute([$text, $number]);
    }
}