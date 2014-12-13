<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of storedata
 *
 * @author Obaid92
 */
class storedata {
    //put your code here
    public  $tentid;
    public $Location;
    public  $totalcost;
    public  $avalability;
    
    function __construct($tentid ,$location, $cost , $ava) {
        $this->tentid = $tentid;
        $this->Location = $location;
        $this->totalcost = $cost;
        $this->avalability = $ava;
    }
}
