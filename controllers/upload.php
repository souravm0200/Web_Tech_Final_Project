<?php
function upload($file, $location, $fileName)
{
    $path_parts = pathinfo($file["name"]);
    $extension = $path_parts['extension'];
    if ($extension == "jpg" || $extension == "jpeg" || $extension == "png" || $extension == "gif") {
        $src = $file['tmp_name'];
        $des = $location . $fileName . '.jpg';

        if (move_uploaded_file($src, $des))
            return true;
        else
           return false;
    } else {
        echo "Invalid file format";
        return false;
    }
}
