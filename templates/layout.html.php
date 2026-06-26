<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="questions.css">
</head>
<body>
    <header><h1>Internet Question Database</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="questions.php">Questions List</a></li>
            <li><a href="addquestion.php">Add a new question</a></li>
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>&copy; IJDB 2026</footer>
</body>
</html>