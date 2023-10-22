<?php

$images           = $_FILES["images"];
$normalizedImages = [];
foreach ($images as $key_name => $value) {
    foreach ($value as $key => $item) {
        $normalizedImages[$key][$key_name] = $item;
    }
}
foreach ($normalizedImages as $image) {
    $types = ["image/jpeg", "image/png"];
    if ( ! in_array($image["type"], $types)) {
        die('Incorrect file type');
    }

    if ( ! is_dir('uploads')) {
        mkdir('uploads', 0777, true);
    }
    $extension = pathinfo($image["name"], PATHINFO_EXTENSION);
    $fileName  = time().".$extension";
    move_uploaded_file($image["tmp_name"], "uploads/".$fileName);
}
