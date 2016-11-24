<?php
if (isset($_POST['submit']) && !empty($_FILES['file'])) {
    move_uploaded_file($_FILES['file']['tmp_name'], './contents/'.$_FILES['file']['name']);
    header('location:./../');
}