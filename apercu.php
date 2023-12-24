<?php
 if ( isset($_GET['id']) ){
     $id = intval ($_GET['id']);
     include_once 'dbConnection.php';
     $req=mysqli_query($con,"SELECT id_img, img_type, img_blob FROM photo WHERE id_img = $id");
     $data=$req->fetch_all(MYSQLI_ASSOC);
     $col = mysqli_fetch_row ($req);
     if ( !$col[0] ){
         echo "Id d'image inconnu";
     }else{
         header ("Content-type: " . $col[1]);
         echo $col[2];
     }
     }else{
         echo "Mauvais id d'image";
     }         
?>    