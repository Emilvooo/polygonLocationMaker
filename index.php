<?php
include_once 'library/autloader.php';
$polygonLocationMaker = new polygonLocationMaker();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="library/css/main.css">
</head>
<body>
    <div id="maps"></div>

    <div id="locations">
        <?php
        foreach ($polygonLocationMaker->locations as $location) {
            $title = explode(' ', $location['title']);
            echo '<span data-lat="'.$location['lat'].'" data-lng="'.$location['lng'].'" data-title="'.$location['title'].'" data-num="'.end($title).'" data-color="'.$location['color'].'"></span>';
        }
        ?>
    </div>

    <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBWEP1v5Mh4AdAXI-jdTLw5dsxrMCgp1PQ"></script>
    <script src="library/js/core.js"></script>

    <script>
        app.init();
    </script>
</body>
</html>
