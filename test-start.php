<html>
    <head>
        <title>quiz-start</title>
        <meta charset="utf-8">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
        <script language="JavaScript">
            alert("enregistrement reussi avec succes");
            window.history.forward();
            function page() {
                var w=window.document;
                w.write("<HTML><HEAD><TITLE>NoBack (episode 2 ET FIN) !</TITLE>");
                w.write("<script language=\"JavaScript\">window.history.forward();");
                w.write("<\/SCRIPT>");
                w.write("</HEAD><body onunload=\"window.history.forward();\">");
                w.write("<FONT FACE=\"Arial\" SIZE='-1' COLOR=\"blue\">");
                w.write("<FORM><CENTER>");
                w.write("Appuyer sur le bouton \"Back\" pour revenir &agrave; la page pr&eacute;c&eacute;dente");
                w.write("<BR><BR><BR>");
                w.write("<INPUT TYPE=\"button\" value=\"Back\" onClick=\"window.history.go(-1)\">");
                w.write("<BR><BR><BR>");
                w.write("Ou cliquez le lien <A HREF=\"javascript:window.history.back()\">Back</A>");
                w.write("<BR><BR><BR>");
                w.write("Ou essayez avec le bouton du navigateur.");
                w.write("</FORM></CENTER></FONT>");
                w.write("<FONT FACE=\"Arial\" SIZE='-1' COLOR=\"blue\">");
                w.write("<p align=\"right\">&copy\;<a href=\"mailto\:tecman_one@yahoo.fr?subject");
                w.write("=Code%20Javascript%20NoBack\"> Tecm@n</a></p></FONT>");
                w.write("</BODY></HTML>");
                w.close;
            }
            
            </SCRIPT>
        <style>
            *{
                margin: 0;
                padding: 0;  
                font-family: sans-serif;         
            }
            body{
                background-color: skyblue;
            }
            h1{
                text-align: center;
                margin-top: 0.5%;
            }
            p{
                text-align: center;
            }
            h3{
                text-align: center;
            }
            #submit{
                border: none;
                background-color: white;
                text-align: center;
                align-items: center;
                justify-content: center;
                margin-left: 46%;
                border-radius: 8px;
                height: 30px;
                width: 90px;
            }
            a{
                text-decoration: none;
                color: black;
            }
            img{
                height: 80px;
                width: 80px;
                border-radius: 5px;
            }
            #password{
                text-align: center;
                border: none;
                width: 120px;
                margin-left: 45%;
                margin-top: -2.8%;
                height: 30px; 
            }
            h4{
                margin-left: 35.8%;
                margin-bottom: 1%;
            }
            #alert{
                color: red;
                float: right;
                margin-top: 2%;
                margin-right: 1%;
            }
            .pwd{
                margin-top: -1.5%;
            }
        </style>
    </head>
    <body onunload="window.history.forward();">
    <?php   
            include_once 'dbConnection.php';
            ob_start();
            $nom=isset($_POST['nom']) ? $_POST['nom'] : 0;
            $sexe=isset($_POST['sexe']) ? $_POST['sexe'] : 0;
            $tel=isset($_POST['tel']) ? $_POST['tel'] : 0;
            $age=isset($_POST['age']) ? $_POST['age'] : 0;
            $email=isset($_POST['email']) ? $_POST['email'] : 0;
            $poste=isset($_POST['poste']) ? $_POST['poste'] : 0;
            $primaire=isset($_POST['primaire']) ? $_POST['primaire'] : 0;
            $lycee=isset($_POST['lycee']) ? $_POST['lycee'] : 0;
            $universite=isset($_POST['universite']) ? $_POST['universite'] : 0;
            $diplome=isset($_POST['diplome']) ? $_POST['diplome'] : 0;
            $xp=isset($_POST['xp']) ? $_POST['xp'] : 0;
            $langues=isset($_POST['langues']) ? $_POST['langues'] : 0;
            $exprimer=isset($_POST['exprimer']) ? $_POST['exprimer'] : 0;
            $nom     = stripslashes($nom);
            $sexe = stripslashes($sexe);
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
            $nom1=isset($_POST['nom1']) ? $_POST['nom1'] : 0;
            $prenom=isset($_POST['prenom']) ? $_POST['prenom'] : 0;
            $tel1=isset($_POST['tel1']) ? $_POST['tel1'] : 0;
            $email1=isset($_POST['email1']) ? $_POST['email1'] : 0;
            $pwd=isset($_POST['pwd']) ? $_POST['pwd'] : 0;
            $query = "SELECT * FROM utilisateurs WHERE tel = '$tel'";
            $result = mysqli_query($con, $query);
            if($nom==0){
            echo '<h5 id="alert">Le mot de passe ne correspond pas<br><br> Veuillez entrer le premier mot de passe generer</h5>';
            }else{
                $query = "SELECT * FROM utilisateurs WHERE tel = '$tel1'";
                $result = mysqli_query($con, $query);
                
                if (mysqli_num_rows($result) == 0) {
                    // Le nom n'existe pas encore, donc l'enregistrer dans la base de données

            $q4 = mysqli_query($con, "INSERT INTO cv VALUES  (NULL, '$nom', '$sexe', '$tel', '$age', '$email', '$poste', '$primaire',
            '$lycee', '$universite', '$diplome', '$xp', '$langues', '$exprimer')");

            include("transfert.php");
            if(isset($_FILES['file'])){
                transfert();
            }

        ob_start();

            // Vérifier si le nom existe déjà dans la base de données
            
            if (mysqli_num_rows($result) == 0) {
                $insertQuery = "INSERT INTO utilisateurs VALUES  (NULL,'$nom1', '$prenom','$tel1','$email1' , '$pwd')";
                mysqli_query($con, $insertQuery);
                // Le nom n'existe pas encore, donc l'enregistrer dans la base de données
            } else {
            }
        } else {
               }
            }
    ?>
        <img src="OIP.jpeg">
        <h1>Vous allez desormais etre soumis a une evaluation</h1><br><br>
        <h3>** Explication sur le deroulement de de l'evaluation **</h3><br><br>
        <p>
            -L'evaluation est un qcm avec limite de temps pour chaque question <br><br>
            -une fois la question passer plus de retour en arriere <br><br>
            -Il est conseiller d'avoir minimum 7/10 pour ameliorer sa consideration <br><br>
            -En effet c'est un qcm de 10 question 15 secondes pour chaque question
        </p><br><br>
        <h3>Bonne chance !!!</h3><br><br>
        <form action="TEST.php" method="post">
        <h4 class="pwd">Mot de passe generé : <?=$pwd?> Notez le !!!</h4><br>
        <h4>Mot de passe : </h4><input type="password" id="password" name="password" value="password" required><br><br>
        <input type="submit" id="submit" value="Demarrer">
        </form>
    </body>
</html>