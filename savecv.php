
<?php   
            include_once 'dbConnection.php';
            ob_start();
            $file    = $_POST['file'];
            $nom     = $_POST['nom'];
            $adresse = $_POST['adresse'];
            $tel     = $_POST['tel'];
            $age     = $_POST['age'];
            $email   = $_POST['email'];
            $poste   = $_POST['poste'];
            $primaire= $_POST['primaire'];
            $lycee   = $_POST['lycee'];
            $universite= $_POST['universite'];
            $diplome = $_POST['diplome'];
            $xp      = $_POST['xp'];
            $langues = $_POST['langues'];
            $exprimer= $_POST['exprimer'];
            $nom     = stripslashes($nom);
            $adresse = stripslashes($adresse);
            $tel= stripslashes($tel);
            $age     = stripslashes($age);
            $email   = stripslashes($email);
            $poste= stripslashes($poste);
            $primaire= stripslashes($primaire);
            $lycee   = stripslashes($lycee);
            $universite= stripslashes($universite);
            $diplome = stripslashes($diplome);
            $xp      = stripslashes($xp);
            $langues = stripslashes($langues);
            $exprimer= stripslashes($exprimer);
            
            $q4 = mysqli_query($con, "INSERT INTO cv VALUES  (NULL, '$file', '$nom', '$adresse', '$tel', '$age', '$email', '$poste', '$primaire',
            '$lycee', '$universite', '$diplome', '$xp', '$langues', '$exprimer')");
        ?>