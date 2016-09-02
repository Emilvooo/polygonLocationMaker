<?php
include_once 'autloader.php';
$playground = new playground();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="//maps.googleapis.com/maps/api/js?language=nl"></script>
</head>
<body>
    <div id="maps"></div>

    <div id="locations">
        <?php
        foreach ($playground->locations as $location) {
            $title = explode(' ', $location['title']);
            echo '<span data-lat="'.$location['lat'].'" data-lng="'.$location['lng'].'" data-title="'.$location['title'].'" data-num="'.end($title).'"></span>';
        }
        ?>
    </div>

    <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/core.js"></script>

    <script>
        app.init();
    </script>
</body>
</html>
