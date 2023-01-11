<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin cp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
</head>
<body>
    <h3 class="title_admin">Welcome to Admin CP</h3>
    <div class="wrapper">
    <?php 
        include("config/config.php");
        include("module/header.php");
        include("module/menu.php");
        include("module/main.php");
        include("module/footer.php");
    ?>
    </div>
</body>
</html>