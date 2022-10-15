<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./index.php?p=insertProcess.php" >     <!-- whynot: ./insertProcess.php-->
        Title <input type="text" name="title">
        location <input type="text" name="location">
        date <input type="date" name="date">
        <input type="submit" value="Insert new movie">
    </form>
</body>
</html>