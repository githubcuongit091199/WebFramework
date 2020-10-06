

<?php

    function arrayPr()
    {
        $product = array(array("1","iphone12","30000000"),array("2","samsung","2000000"));
        $_SESSION['Product']=$product;

    }
    function Out()
    {
        $listProduct = $_SESSION['Product'];
   
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
    
     
           
                // $value=$products[count($products)-1];
                $id=count($products);
          
        echo "id:". $id;
       
        $product = array($id,$name,$price);
        // array_push($products,$product);
        $products[]=$product;
        $_SESSION['Product']=$products;

        

        Out();
      

    }
    

    


    ?>
