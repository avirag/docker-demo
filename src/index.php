<?php
    $value = "Docker";

    $db = new PDO('mysql:host=database;dbname=demo-db;charset=utf8mb4', 'demo', 'secret');
    $query = $db->query('SELECT * FROM dockerSample');
    $data = $query->fetchAll(PDO::FETCH_OBJ);
?>
<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>

        <?php foreach ($data as $row): ?>
            <p>Hello, <?= $row->name ?></p>
        <?php endforeach ?>
    </body>
</html>