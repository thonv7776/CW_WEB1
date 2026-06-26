<?php
try{
    include 'includes/DatabaseConnection.php';

    $sql = 'SELECT joke.id, joketext, author.name, email, category.name AS category, jokedate, image FROM joke
    INNER JOIN author ON authorid = author.id
    INNER JOIN category ON categoryid = category.id';

    $jokes = $pdo->query($sql);
    $title = 'Joke list';

    ob_start();
    include 'templates/jokes.html.php';
    $output = ob_get_clean();
}catch (PDOException $e){
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage();
}
include 'templates/layout.html.php';