<?php
include_once 'library/autloader.php';
$playground = new Playground();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $playground->importLocations($_POST['locations']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="library/css/main.css">
</head>
<body>

<div id="form">
    <form method="post">
        <p>syntax: street,lat,lng,color</p>
        <textarea class="form-control" id="locations" name="locations" style="height: 350px;"></textarea><br/>
        <button type="submit" name="submit">
            Import
        </button>
    </form>
</div>

</body>
</html>





