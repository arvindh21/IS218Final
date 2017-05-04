<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>TO DO LIST</title>
    <link rel="stylesheet" type="text/css" href="" />
</head>

<!-- the body section -->
<body>
    <header><h1>TO DO LIST</h1></header>

    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>The database must be installed as described in the appendix.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?>TO DO LIST.</p>
    </footer>
</body>
</html>
