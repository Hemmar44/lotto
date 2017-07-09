<?php

require_once 'Errors.php';

class Numbers {
    
    public $myNumbers = [];
    public $drawed;
    public $matched;
    public $countMatched;
    public $data;


    private $errors;
    
    
    public function __construct() {
        
        $this->errors = new Errors;
        
    }
    
    
    public function myNumbers($request = []){
        
        
        if(count($request)>0){
            
           
            foreach ($request as $key => $data) {
                
                if(strpos($key, 'var') !== false) {
                    
                   array_push($this->myNumbers, $data);
                    
                 }
                
            }
            
            return $this->myNumbers;
        }
        
        return false;
    }


    


    private function findMatched($myNumbers, $drawed) {
        
        return array_intersect($myNumbers, $drawed);
        
        
    }
    
    public function howManyMatched($drawed) {
        
        return count($drawed);
        
    }


    
    public function draw($min, $max, $quantity) {
        
        
        if(!$this->errors->checkForErrors($min, $max, $quantity)) {
            
            $this->performDraw($min, $max, $quantity);
            
            $this->matched = $this->findMatched($this->myNumbers, $this->drawed);
            $this->countMatched = $this->howManyMatched($this->matched);
            
            return $this->data = [$this->drawed, $this->matched, $this->countMatched];
            
        }
        
        return $this->errors->error();
        
    }
        
       
        
    private function performDraw($min, $max, $quantity) {
        
        $numbers = [];
            $i=0;
            do {

                $number = rand($min, $max);

                while (!in_array($number, $numbers)) {

                array_push($numbers, $number);
                    $i++;
                }

            } while ($i<$quantity);
            
            sort($numbers);
            
            $this->drawed = $numbers;

            //return $this->returnResult($numbers);

    }
    
    public function returnResult($numbers = []) {
        
        if(count($numbers) > 0) {
            $string = '';

            foreach($numbers as $number){

                    $string .= $number . ' ';
                    
                }

            return $string;
        
        }
        
        return false;
    }
    
   

        
       
        
        

}
