<?php
    function transfert(){
        $ret=false;
        $img_blob='';
        $img_taille= 0;
        $img_type='';
        $img_nom='';
        $taille_max=250000;
        $ret=is_uploaded_file($_FILES['file']['tmp_name']);
        if(!$ret){
            echo'pb de trans';
            return false;
    }else{
        $img_taille=$_FILES['file']['size'];
        $img_type=$_FILES['file']['type'];
        $img_nom=$_FILES['file']['name'];
        include 'dbConnection.php';
        $img_blob= file_get_contents($_FILES['file']['tmp_name']);
        $img_blob=addslashes($img_blob);
        $req = mysqli_query($con, "INSERT INTO photo VALUES  (NULL, '$img_nom', '$img_taille', '$img_type', '$img_blob')");
        return true;
    }
}
?>