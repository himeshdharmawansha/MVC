<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/js/index.js"></script>
</head>
<body>
    
        <?php 

        session_start();

        require "../app/core/init.php";

        if(DEBUG)
        {
            ini_set('display_errors', 1);
        }else
        {
            ini_set('desplay_errors', 0);
        }

        $app = new App;
        $app->loadController();

        ?>
</body>
</html>
