<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GetInsererSalle
 *
 * @author maxme
 */

include './Tools/Bdd.php';
    //put your code here
    
    $cnx = Bdd::getCnx();
    $sql = $cnx->prepare("insert into salle values(".$GET['id'].",'".$GET['nom']."',".$GET['nb'].")");
    $sql->execute();
    
    echo "salle inseres";
    