<?php
require_once('vendor/autoload.php');
use Ilovepdf\PdfjpgTask;
$myTask = new PdfjpgTask('project_public_0bd175c8384f595bac8230f14db18225_cJjrl3e7b63835839cc9a941c19bc460e3d68','secret_key_8c58cd8c5c814e3d0333ce6ea73a20e3_8NNkT60faae3deaf5a93c86e1ecbd52dad8f4');
$file = $myTask->addFile('uploads/presentation.pdf');
$myTask->execute();
$myTask->download("downloads/");
if(isset($myTask))
{
    echo "<script>alert('File Converted Succesfully');</script>";
}
?>