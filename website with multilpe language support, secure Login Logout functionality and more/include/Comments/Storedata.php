<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Storedata
 *
 * @author Obaid92
 */
class Storedata {
    
   public  $pagename = "";
   public $name = "sds";
   public $comment = "";
   
   
   public function __construct($pname ,$pname ,$pcomment) {
        
      $this->pagename = $pname;
       $this->name = $pname;
        $this->comment = $pcomment;
   }
  
}
