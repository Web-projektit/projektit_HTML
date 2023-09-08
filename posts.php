<?php
$start = $_GET["start"] ?? 0;
$end = $_GET["end"] ?? 25;

# Generate list of posts
$data = [];
for ($i = $start; $i <= $end; $i++) {
    $data[] = "Post #$i";
}

$tulos = array("posts" => $data);
# Artificially delay speed of response
sleep(1);
# Return list of posts
echo json_encode($tulos);
?>