<?php
    include_once("Templates/header.php");
    include_once("Templates/nav.php");
?>

<style>
  body{
    background-image: url(Images/Employee.jpg);
    background: color #3a3a9b ;
    background-size:cover;
  }
  
  h1{
    color: #3407e4;
    font-size: larger;
  }
  
  p{
    color: #000000;
    font-size: 50px;
  }
</style>
<body>


  <h1>Stan's Employees.</h1>
  <p>We value honesty and integrity in our work.</p>
  <p>
    In case of employee uncivilization, report it in the comment section as a problem 
    and we will be sure to address the issue.
  </p>
  <a href="comment.html"id="commentLink">Comment</a>
  <a href="people.html"id="peopleLink">people</a>
  <div id="employeeDetails"></div>

</body>
</html>
