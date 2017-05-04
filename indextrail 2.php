 <?php
  include_once ('db.php');
  $query='SELECT * FROM user ORDER BY id';
  $statement=$database->prepare($query);
  $statement->execute();
  $results= $statement->fetchAll();
  $statement-> closeCursor;
  if ($_SERVER ['REQUEST_METHOD']=='POST')
  {
    elseif(isset($_POST['login']))
        require 'index.php';
  }
  {
    else(isset($_POST['register']))
      require 'register.php';
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <h3><center>To Do List Login</center></h3>
</head>
  <body>
    <form action="todo.php" method="get">
          <br>
          <br>
          <br>
          <br>
          <h3><center><label class="field" for=Email>Email: <input type="text" name="email" required></center>
          <h3><center><label class="field" for=Password>Password<input type="password" name="password" required><br></h3></center>
          <br>
     <div class="form-group">
              <h2><center>
              <a href="https://web.njit.edu/~ak798/final/todo.php"><button type="button" style="width: 30%"><strong>Login</button></a></strong>
              <a href="https://web.njit.edu/~ak798/final/register.php"><button type="button" style="width: 30%"><strong> Register</button></a>
              <br>
              <br>
              <a href="http://web.njit.edu/~ak798/final/forgot.php"><button type="button" style="width: 30%"><strong>Forgot Password</button></a>

              </center></h2>
              <br>
              
              
     </div>
    </form>
        
</body>
</html>