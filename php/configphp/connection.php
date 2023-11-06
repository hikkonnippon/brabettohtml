<?php
    $servidor="mysql:dbname=".BD.";host=".SERVER;
    try{
        $pdo= new PDO($servidor,USER,PASSWORD,
            array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
    );
    echo "";
    }catch(PDOException $e){
        echo "";
    }

?>