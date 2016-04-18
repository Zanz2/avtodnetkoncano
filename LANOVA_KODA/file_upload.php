<?php
error_reporting(0);
if($_FILES["file1"]["name"] == null)
{
    echo "Izberi video";    
}
else
{
    include 'pdo-connect.php';

    $fileName = $_FILES["file1"]["name"];
    $fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
    $fileType = $_FILES["file1"]["type"]; // The type of file it is
    $fileSize = $_FILES["file1"]["size"]; // File size in bytes
    $fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
    if (!$fileTmpLoc) { // if file not chosen
        echo "ERROR: Please browse for a file before clicking the upload button.";
        exit();
    }
    if(($fileType == "video/mp4" || $fileType == "audio/mp3"))
    {
    
        if(move_uploaded_file($fileTmpLoc, "upload/$fileName")){
            echo "Nalaganje datoteke <b>$fileName</b> je končano";

            $stavek = $baza->prepare("INSERT INTO video(video_id, video_name, video_size, filetype) VALUES (null,:name,:size, :type)");
            $stavek->bindparam("name", $fileName);
            $stavek->bindparam("size", $fileSize);
            $stavek->bindparam("type", $fileType);
            $stavek->execute();

        } else {
            echo "Upload failed";
        } 
    }
    else
    {
        echo "Dovoljene so samo datoteke formata .mp3 in .mp4";
    }

}