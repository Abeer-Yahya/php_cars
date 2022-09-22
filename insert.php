!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
 
     
        $conn = mysqli_connect("localhost", "root", "root", "cars");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $CarID =  $_REQUEST['CarID'];
        $Image = $_REQUEST['Image'];
        $Model =  $_REQUEST['Model'];
        $Price = $_REQUEST['Price'];
        $Color = $_REQUEST['Color'];
         
        // Performing insert query execution
        // here our table name is cars_info
        $sql = "INSERT INTO cars_info  VALUES ('$CarID',
            '$Image','$Model','$Price','$Color')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$CarID\n $Image\n "
                . "$Model\n $Price\n $Color");
        } else{
            echo "ERROR: Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>