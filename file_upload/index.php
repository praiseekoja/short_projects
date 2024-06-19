 <?php 
 $target_dir='files';
 $targrt_file=$target_dir.basename($_FILES["file"]["tmp_name"]);
 $uploaded=1;
 $filetype= strtolower(pathinfo($targrt_file,PATHINFO_EXTENTION));
 echo $filetype;


 
 
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="name">
        <input type="submit" name="submit">
        


    </form>
    
 </body>
 </html>