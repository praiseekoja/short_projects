<?php 
 $target_dir='files';
 $targrt_file=$target_dir.basename($_FILES["file"]["tmp_name"]);
 $uploaded=1;
 $filetype= strtolower(pathinfo($targrt_file,PATHINFO_EXTENSION));
 echo $filetype;


 
 
 ?>