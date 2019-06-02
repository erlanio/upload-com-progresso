<?php
if (isset($_POST['btnSubmit'])) {
    $uploadfile = $_FILES["uploadImage"]["tmp_name"];
    $folderPath = "uploads/";
    
    if (! is_writable($folderPath) || ! is_dir($folderPath)) {
        echo "error";
        exit();
    }
    if (move_uploaded_file($_FILES["uploadImage"]["tmp_name"], $folderPath . $_FILES["uploadImage"]["name"])) {
        echo '<img src="' . $folderPath . "" . $_FILES["uploadImage"]["name"] . '">';
        exit();
    }
}
?>