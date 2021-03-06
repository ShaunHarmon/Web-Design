

<!DOCTYPE html>
<html>
<head>
  <meta name="City Fitness" >
  <link rel="stylesheet" href="styles.css">
  
  <script src="script.js"></script>
  <title>City Fitness</title>
</head>
<body>
    <header>
        <img id="header_background" src="Assests/newBackground.jpg">
        <a href="index.html">
                <img id="logo" src="Assests/CityFitness_Logo_ColourReverse.png">
        </a>
        <nav>
            <a href="index.html">HOME</a> 
            <a href="Upper.html">UPPER BODY</a> 
            <a href="abs.html">ABS</a> 
            <a href="legs.html">LEGS</a>
            <a href="Store.php">STORE</a>
        </nav>
    </header>

    <div class="container">
        <?php 
            //Allow Headers 
            header('Access-Control-Allow-Origin: *');
            $servername = "localhost:3306"; 
            //$servername = 'sh7652server.centralus.cloudapp.azure.com:3306';
           //$servername = '40.113.207.35:3306';
            $username = "manager1"; 
            $password = "July201998!!"; 
            $dbname = "products";
            // Create connection 
            $conn =  new mysqli($servername, $username, $password, $dbname);
            
            
            // Check connection 
            if ($conn->connect_error) 
                
                echo "Error: Unexpected connection error. Please retry the operation."; 
            else 
            { 
                
                $product1 = $conn->query("SELECT * FROM products WHERE product_ID = 1");
                
                if (($product1 != 0) && ($product1->num_rows > 0)) 
                { 
                    $row = $product1->fetch_assoc();
                    $A = $row['product_NAME']; 
                    $B = $row['product_COST']; 
                    $C = $row['product_TYPE']; 
                    $path = $row['path'];
                    echo "<div class='columns'>
                        <ul class='products'>
                            <li>
                                <img class='thumbnail' src ='". $path ."'/>
                            </li>
                            <li>".$A."</li>
                            <li>$".$B.".00</li>                       
                        </ul>                    
                    </div>";                 
                } 
                $product2 = $conn->query("SELECT * FROM products WHERE product_ID = 2");
                
                if (($product2 != 0) && ($product2->num_rows > 0)) 
                { 
                    $row = $product2->fetch_assoc();
                    $A = $row['product_NAME']; 
                    $B = $row['product_COST']; 
                    $C = $row['product_TYPE']; 
                    $path = $row['path'];
                    echo "<div class='columns'>
                        <ul class='products'>
                            <li>
                                <img class='thumbnail' src ='". $path ."'/>
                            </li>
                            <li>".$A."</li>
                            <li>$".$B.".00</li>                       
                        </ul>                    
                    </div>";                 
                } 
                $product3 = $conn->query("SELECT * FROM products WHERE product_ID = 3");
                
                if (($product3 != 0) && ($product3->num_rows > 0)) 
                { 
                    $row = $product3->fetch_assoc();
                    $A = $row['product_NAME']; 
                    $B = $row['product_COST']; 
                    $C = $row['product_TYPE']; 
                    $path = $row['path'];
                    echo "<div class='columns'>
                        <ul class='products'>
                            <li>
                                <img class='thumbnail' src ='". $path ."'/>
                            </li>
                            <li>".$A."</li>
                            <li>$".$B.".00</li>                       
                        </ul>                    
                    </div>";                 
                } 

                $conn->close(); 
            } 
        ?>
    </div>
    
    <footer>
        <div class="grid-container">
            <div>
                <p>
                        CONTACT INFO<br>
                        <br>291 South 21th Street,<br>
                        Suite 721 New York NY 10016<br>
                         + 1-701-866-2450<br>
                         support@cityfitness.com<br>
                         cityfitness.com<br>
                </p>
            </div>
            <div>
                    <p>
                            ABOUT CITY FITNESS<br>
                            <br>No matter what you're looking for in a gym, we've got a membership option made for you.
                             All City Fitness members enjoy unlimited access to their home club and the support of 
                             our friendly, knowledgeable staff anytime you need it. CF Black Card members receive 
                             additional benefits, including the ability to bring a guest for free and access to any of our 1,500+ CF locations.
                    </p>
            </div>
            <div>
                <img id="footer-img" src="Assests/58470864-silhouette-of-a-fitness-man-standing-with-arms-folded-over-dark-background.jpg">
            </div>
        </div>
    </footer>
</body>
</html>
