<?php
include_once 'autloader.php';
$playground = new Playground();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $playground->importLocations($_POST['locations']);
}
?>
<form method="post">
    <textarea class="form-control" id="locations" name="locations" style="height: 350px;"></textarea><br/>
    <button type="submit" name="submit">
        Import
    </button>
</form>






