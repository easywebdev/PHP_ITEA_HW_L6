<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Users</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>

<body>
    <div>
        <a href="<?= $_SERVER['HTTP_REFERER']; ?>">Back</a>
    </div>
    Hello User:
    <br />
    <pre>
        <?php
            print_r($user);
        ?>
    </pre>
</body>
</html>