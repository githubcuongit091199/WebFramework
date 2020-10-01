<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>  
<body>
<?php
    include 'products.php';
    arrayPr();
    $products = $_SESSION['Product'];
    
    if(array_key_exists('buttom1',$_POST))
    {
        add($_POST['name'],$_POST['price']);
    
    }

?>


<form action="product-list.php" method="post">
Name: <input type="text" name="name"><br>
price: <input type="text" name="price"><br>
<input type="submit" name="buttom1">

</form>



</body>
</html>

