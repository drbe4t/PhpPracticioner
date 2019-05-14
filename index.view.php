<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        margin: 0;
    }
        header {
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }

        .breath {
            padding: 1em;
        }
        .associative {
            background: #e8e8;
            padding: 2em;
        }
    </style>
</head>
<body>
    <header>

        <h1><?= $greeting ?></h1>
    </header>


    <ul>
        <?php   foreach ($names as $name) : ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>

        <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            };
            ?>
    </ul>

    <ul>
    <?php foreach ($animals as $animal):?>
        <li class="breath"><?= $animal ?></li>
        <?php endforeach ?>
    </ul>

    <div class="associative">
           <ul>
            <?php foreach($person as $feature=>$val) : ?>
                <li><strong><?= $feature ?></strong>: <?= $val; ?></li>
                <?php endforeach ?>
            </ul>
    </div>

<h2>Tasks for the day</h2>
    <ul>
        <li>
            <strong>Name: </strong><?= $tasks['title']; ?>
        </li>
        <li>
            <strong>Due: </strong><?= $tasks['due']; ?>
        </li>
        <li>
            <strong>Assigned:</strong> <?= $tasks['assigned_to']; ?>
        </li>
        <li>
            <strong>Status: </strong><?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>
    </ul>


</body>
</html>