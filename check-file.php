<?php
$filename = 'upload/shadow_dye.JPG';

ifi(file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>
