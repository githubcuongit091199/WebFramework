<?php
// Start the session
session_start();

    include 'products.php';
    // arrayPr();
    // $products = $_SESSION['Product'];
    
   
     
        if(isset($_POST['name'])&&isset($_POST['price']))
        {
            add($_POST['name'],$_POST['price']);
        }
        
    



?>
<!DOCTYPE HTML>
<html>  
<body>



<form action="product-list.php" method="post">
Name: <input type="text" name="name"><br>
price: <input type="text" name="price"><br>
<input type="submit" name="buttom1">

</form>



</body>
</html>

