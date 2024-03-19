<?php
require_once('vendor/autoload.php');
use Ilovepdf\Ilovepdf;
$ilovepdf = new Ilovepdf('project_public_0bd175c8384f595bac8230f14db18225_cJjrl3e7b63835839cc9a941c19bc460e3d68','secret_key_8c58cd8c5c814e3d0333ce6ea73a20e3_8NNkT60faae3deaf5a93c86e1ecbd52dad8f4');
$myTaskMerge = $ilovepdf->newTask('merge');
$file1 = $myTaskMerge->addFile("uploads/one.pdf");
$file2 = $myTaskMerge->addFile("uploads/two.pdf");
$myTaskMerge->execute();
$myTaskMerge->download('downloads/');
if(isset($myTaskMerge))
{
    echo "<script>alert('File Merged Succesfully');</script>";
}
?>

