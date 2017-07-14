<?php
$filename = 'upload/shadow_dye.jpg';

ifi(file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>
