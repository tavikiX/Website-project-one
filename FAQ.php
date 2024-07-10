<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
    include_once("DBConnection.php");
    if(isset($_POST["Saerch"])){
        
        $Querries =mysqli_real_escape_string($conn, addslashes( $_POST["Querries"]));
      
        $insert_comments = "INSERT INTO faq(Querries)
        VALUES ('Querries')";
      
      if ($conn->query($insert_comments) === TRUE) {
        echo "New record inserted successfully";
        header("Location: FAQ.php");
        exit();
      } else {
        echo "Error: " . $insert_comments. "<br>" . $conn->error;
      }
      
      $conn->close();
      }
?>

<style>
    body{
        background-image: url(Images/FAQ.jpg);
        background-size: cover;
    }

    h1{
        color: #3407e4;
        font-size: larger;
    }

    p{
        color: #fff8f8;
        font-size: 50px;
    }
    input[type ="text"], input[type = "Querries"]
    textarea{
        width: 50%;
        padding: 20px;
        margin-bottom: 15px;
        border: 1px solid gray;
        border-radius: 5px;
        box-sizing: border-box;
    }
</style>
<body>
    
    <h1>Any questions!!</h1>

    <p>When is the maintenance period?</p>
    <p>How long is the maintenance period?</p>
    <p>Who do I consult for problem solving?</p>

    <p>any further questions to be raised please search below:</p>
    <label for="Querries">Querries:</label><br>
        <input type="text" name="Querries" placeholder="Querries" id="Querries"><br><br>
        <button for="Search">Search:</button><br>
</body>
</html>