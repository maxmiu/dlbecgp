<html>

<head>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body> 
    <?php include "navbar.php"; ?>
    <div style="padding:24px;">
        <?php include "$view.php"; ?>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>