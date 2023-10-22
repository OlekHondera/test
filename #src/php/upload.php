<?php

$image = $_FILES['image'];
//Валидация
$types = ['image/jpeg', 'image/png', 'image/gif'];
if ( ! in_array($image['type'], $types)) {
    die('Incorrect file type');
}
?>

	<pre>
        <?php
        print_r($image) ?>
    </pre>
<?php
if ( ! is_dir('uploads')) {
    mkdir('uploads', 0777, true);
}
$extension = pathinfo($image["name"], PATHINFO_EXTENSION);
$fileName  = time().".$extension";
move_uploaded_file($image["tmp_name"], "uploads/".$fileName);