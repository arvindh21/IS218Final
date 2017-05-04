<!doctype html>
<meta charset="utf-8" />
<title>Todo list</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<header>
    <h1>
        <span>Todo list</span>
    </h1>
</header>

<ul>
    <li>
        <form action="todo.php" method="post">
      <center><legend><b>Create a to Table</b></legend>
      <p><label class="field" for=CDate>Create Date: <input type="Date" name="CDate" /></p>
      <p><label class="field" for=Due>Due Date: <input type="DATETIME" name="duedate" /></p>
      <p><label class="field" for=Message>Message: <input type="text" name="message"" /></p>
      <p><a href="logout.php">Logout</a></p>

      <button>Submit</button> 


        </form>
    </li>
</ul>
</html>