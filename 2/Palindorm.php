<form method="post">
    <label for="num">Enter a Number:</label>
    <input type="text" name="num" id="num">
    
    <button type="submit">Check</button>  
</form>

<?php   
    if($_POST)  
    {  
        // Get number from form  
        $num = $_POST['num'];
        
        // Reverse the number  
        $reverse = strrev($num);  
          
        // Check if the number and reverse are equal  
        if ($num == $reverse) {  
            echo "The number $num is a Palindrome";     
        } else {  
            echo "The number $num is not a Palindrome";   
    }  
}
?>  