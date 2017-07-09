<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>First</title>
    </head>
    
    <body>
        <div>
            <form action="index.php" method='POST'>
                <label for="min">Początek zakresu</label>
                <input type="text" name='min' id="min" value="<?php if(isset($min)) {echo $min;}?>">
                <br>
                <label for="min">Koniec zakresu</label>
                <input type="text" name="max" id="max" value="<?php if(isset($max)) {echo $max;}?>">
                <br>
                <label for="min">Ile liczb?</label>
                <input type="text" name="quantity" value="<?php if(isset($quantity)) {echo $quantity;}?>">
                <br>
                <label for="first">Liczba pierwsza</label>
                <input type="text" name='var_first' id="first" value="<?php if(isset($sort[0])) {echo $sort[0];}?>">
                <br>
                <label for="second">Liczba druga</label>
                <input type="text" name="var_second" id="second" value="<?php if(isset($sort[1])) {echo $sort[1];}?>">
                <br>
                <label for="third">Liczba trzecia</label>
                <input type="text" name='var_third' id="third" value="<?php if(isset($sort[2])) {echo $sort[2];}?>">
                <br>
                <label for="fourth">Liczba czwarta</label>
                <input type="text" name='var_fourth' id="fourth" value="<?php if(isset($sort[3])) {echo $sort[3];}?>">
                <br>
                <label for="fifth">Liczba piąta</label>
                <input type="text" name='var_fifth' id="fifth" value="<?php if(isset($sort[4])) {echo $sort[4];}?>">
                <br>
                <label for="sixth">Liczba szósta</label>
                <input type="text" name='var_sixth' id="sixth" value="<?php if(isset($sort[5])) {echo $sort[5];}?>">
                <br>
                <button type="submit" name="submit" value="submit">Losuj</button>
            </form>
        </div>
        <?php
         
        if(isset($result)> 0) {
            
        echo $numbers->returnResult($result[0]);
        
        
        echo '<br>';
        
        
            
        echo $numbers->returnResult($result[1]);
        
        
        echo '<br>';
        
        
            
        echo $result[2];
            
        }
        
        
        ?>
    </body>
</html>


