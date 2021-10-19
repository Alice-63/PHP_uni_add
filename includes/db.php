<?php


try{$db=new PDO("mysql:host=localhost;dbname=uni;charset=utf8","root","");}
catch(PDOException $e){
    echo "<strong>$e->getCode() </strong>: $e->getMessage()";
};

?>