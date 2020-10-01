

<?php

    function arrayPr()
    {
        $product = array(array("1","iphone12","30000000"),array("2","samsung","2000000"));
        $_SESSION['Product']=$product;

    }
    function Out($listProduct)
    {
        foreach($listProduct as $valuepr)
        {
            foreach($valuepr as $value)
            {
                echo $value;
                echo " ";
    
            }
            echo "<br>";
        }
        
    }
    function add($name,$price)
    {
        $products=$_SESSION['Product'];
        $product = array($products.l,$name,$price);
        $product = array_merge($products,$product);
      

    }
    

    


    ?>
