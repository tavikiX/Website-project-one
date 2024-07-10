<?php
 include_once("Templates/header.php");
 include_once("Templates/nav.php");
 include_once("DBConnection.php");
 if(isset($_POST["Enter"])){
  $username =mysqli_real_escape_string($conn, addslashes( $_POST["username"]));
  $comment =mysqli_real_escape_string($conn, addslashes( $_POST["comment"]));
  $rating =mysqli_real_escape_string($conn, addslashes( $_POST["rating"]));
  $Problems =mysqli_real_escape_string($conn, addslashes( $_POST["Problems"]));

  $insert_comments = "INSERT INTO comments(username, comment, rating, problems)
  VALUES ('$username', '$comment', '$rating', '$Problems')";

if ($conn->query($insert_comments) === TRUE) {
  echo "New record inserted successfully";
  header("Location: comment.php");
  exit();
} else {
  echo "Error: " . $insert_comments. "<br>" . $conn->error;
}

$conn->close();
}
?>

<style>
  body{
    background-image: url(Images/Comment.jpeg);
    background: color #3a3a9b ;
    background-size:cover;
  }
  
  h1{
    color: #3407e4;
    font-size: larger;
  }
  
  p{
    color: #ff0000;
    font-size: 25px;
  }
  form{
    margin-top: 20px;
  }
  label{
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  input[type ="text"], input[type = "problems"]
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


  <h1>This is the comment section, Use it wisely!!!</h1>
  <p>Enter comment below!!!</p>

  <form action="" autocomplete="off">
    <label for="Username">Username:</label><br>
    <input type="text" name="Username" placeholder="Username" id="Username"><br><br>
    <label for="Comment">Comment:</label><br>
    <textarea name="Comment" minlength="10" maxlength="1000" placeholder="Enter your comment here..."></textarea><br><br>
    <label for="rating">Rating (1-10):</label><br>
    <input type="number" name="rating" min="1" max="10"><br><br>
    <label for="Problems">Problems (if any):</label><br>
    <input type="text" name="Problems" placeholder="Problems(if any)" id="Problems"><br><br>
    <input type="submit" name="Enter"><br><br>
    
    <p>Note that cyberbullying is discouraged and if you are noted doing so you 
      will be banned from the system!!!</p>
    <p>Do not say that you were not warned!!!</p>
  </form>
  
  
</body>
</html>