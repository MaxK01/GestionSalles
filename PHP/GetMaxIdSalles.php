<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetMaxIdSalles
 *
 * @author maxme
 */
include './Tools/Bdd.php';
    //put your code here
    
    $cnx = Bdd::getCnx();
    $sql = $cnx->prepare("select max(idSalle) as num from salle");
    $sql->execute();
    
    $num = $sql->fetchColumn();
    if($num == NULL){
        echo "]";
    }
    else
    {
        echo $num;
    }
    

