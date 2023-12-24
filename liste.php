<html>
     <head>
         <title>Stock d'images</title>
     </head>
     <body>
     <?php 
      include_once 'dbConnection.php';
        $req=mysqli_query($con,"SELECT img_nom, id_img " . "FROM photo ORDER BY img_nom");
        $data=$req->fetch_all(MYSQLI_ASSOC);
        foreach($data as $col){
         echo "<a href=\"apercu.php?id=" . $col['id_img'] . "\">" . $col['img_nom'] . "</a><br />";
        }
     ?>
     </body>
</html>