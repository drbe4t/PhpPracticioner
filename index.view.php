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
      .fancy{

            text-decoration: none;
            display: inline;
        }

    </style>
</head>
<body>
    <header>

        <h1><?= $greeting ?></h1>
    </header>
    <nav>
        <ul class="fancy">
            <li><a href="/about.php">About</a></li>
        </ul>
    </nav>

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


</body>
</html>