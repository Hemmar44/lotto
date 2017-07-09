<?php

/**
 * Description of Errors
 *
 * @author Hemmar
 */
class Errors {
    //put your code here
    private $error;
    
    public function error() {
        
        return $this->error;
               
    }

        private function checkIfEqual($min, $max) {
        
        if($min === $max) {
            
            return true;
            
        }
    }
    
    
    private function checkIfMinIsBiggerThenMax($min, $max) {
        
        if($min >= $max) {
            
            return true;
            
        }
    }

    private function checkQuantity($min, $max, $quantity){
        
        if ($quantity <= 0) {
            
            return true; 
        }
    }
    
    private function giveMeTheDifference($min, $max) {
        
     
        return $max - $min;
        
    }
    
    private function checkIfQuantityIsBiggerThenTheDifference($min,$max,$quantity) {
        
        if(($quantity - $this->giveMeTheDifference($min, $max)) > 0){
            
            return true;
            
        }
    }
    
    private function checkIfnotANumber($min, $max, $quantity) {
        
        $values = [$min, $max, $quantity];
        
        foreach ($values as $value) {
            
            if(!is_numeric($value)) {
                
                return true;
            }
        }
        
    }


    public function checkForErrors($min, $max, $quantity) {
        
        if($this->checkIfnotANumber($min, $max, $quantity)){
            
            return $this->error = $this->message('Nie zostawiaj pustych pól, podawaj tylko liczby');
            
        }
        
        if($this->checkIfEqual($min, $max)) {
            
           return $this->error = $this->message('Liczby określające zakres nie mogą być sobie równe');
            
            
        }
        
        if($this->checkIfMinIsBiggerThenMax($min, $max)){
            
           return $this->error =  $this->message('Pierwsza podana liczba musi być mniejsza od drugiej');
            
            
        }
        
        if($this->checkQuantity($min, $max, $quantity)) {
            
           return $this->error =  $this->message('Coś jest nie tak z ilością liczb, sprawdź i spróbuj ponownie');
            
             
        }
        
        if($this->checkIfQuantityIsBiggerThenTheDifference($min, $max, $quantity)){
            
           return  $this->error = $this->message('Ilość liczb, które chcesz wylosować nie może być większa od podanego przedziału');
            
            
        }
        
        return false;
    }


    private function message($text) {
        
        return $text;
        
    }
}
