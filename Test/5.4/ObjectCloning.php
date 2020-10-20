<?php
     class ObjectTracker {
         private static $nextSerial = 0 ;
         private $id, $name;
         
         function __construct($name) {
             $this->name = $name;
             $this->id = ++self::$nextSerial;
         }
         
         public function __clone(){
             $this->name = "Clone of $this->name";
             $this->id = ++self::$nextSerial;               
         }
         
         
         
         
         public function getName() {
             return ($this->name);
         }

         public function getId() {
            return ($this->id);
        }

         public function setName($name) {
            return $this->name = $name;
        }
     }
     $ot = new ObjectTracker("Zee's Object");
     $ot2 = clone $ot;
     $ot2->setName('Another Object');
     print ($ot->getId() . " " . $ot ->getName() . "<br/>");
     print ($ot2->getId() . " " . $ot2 ->getName() . "<br/>");
?>