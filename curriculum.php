<html>
    <head>
        <title>CV</title>
        <meta charset="utf-8">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-color: skyblue;
            }
            form{
                background-color: white;
                text-align: center;
                width: 50%;
                margin-left: 25%;
                height: 95%;
                margin-top: 1.2%;
            }
            h4{
                float: left;
                margin-left: 5%;
            }
            input{
                border: none;
                border-bottom: 2px solid black;
            }
            .box2{
                float: right;
                margin-right: 5%;
                margin-top: 2%;
            }
            .box1{
                margin-top: 2%;
                float: left;
                margin-left: 5%;
            }
            .box3{
                margin-top: 28%;
                margin-right: 50%;
            }
            .t2{
                margin-top: 22%;
                margin-left: -35%;
            }
            .box4{
                float: right;
                margin-top: -8.8%;
                margin-right: 5%;
            }
            .t3{
                margin-top: 5%;
                margin-left: 5.5%;
            }
            .box5{
                margin-top: 3%;
                float: left;
                margin-left: 7%;
            }
            .t4{
                float: left;
                margin-top: 10%;
                margin-left: -71%;
            }
            .box6{
                margin-top: 23%;
                margin-right: 38%;
            }
            .t5{
                margin-top: 2%;
                margin-left: 5.5%;
            }
            .box7{
                margin-top: 8%;
                float: left;
                margin-left: -12.5%;
            }
            .user-img {
                width: 60px;
                height: 60px;
                border-radius: 50%; position: fixed;
                justify-content: center;
                align-items: center;
                border: 1px solid black;
                margin-left: 44%;
                margin-top: 1%;
            }
            #photo{
                width: 60px;
                height: 60px;
                border-radius: 50%;
            }
            #file{
                display: none;
            }
            #uploadbtn{
                position: absolute;
                height: 30px;
                width: 30px;
                padding: 6рх 6рх;
                border-radius: 50%;
                cursor: pointer;
                color: #FFF;
                transform: translate(-90%);
                margin-top: 100px;
                background-color: Orgb(173, 172, 172 , 0.801); box-shadow: 2px 4px 4px Org(0, 0, 0,0.644);
            }
            img{
                height: 30px;
                width: 30px;
            }
            .select{
                margin-top: -220%;
                margin-left: 30%;
            }
            #submit{
                background-color: skyblue;
                border: none;
                color: white;
                height: 30px;
                width: 90px;
                border-radius: 8px;
                margin-top: 8%;
                margin-left: 28%;
            }
            .alert{
                text-align: center;
                margin-top: 2%;
                color: red;
            }
            .balert{
                margin-left: 3%;
                margin-top: 1.5%;
                height: 30px;
                width: 100px;
            }
            .balert a{
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
        <script language="JavaScript">
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
        </script>
        <?php
                include_once 'dbConnection.php';
                $nom     = $_POST['nom'];
                $nom     = ucwords(strtolower($nom));
                $prenom  = $_POST['prenom'];
                $pwd     = rand();
                $tel     = $_POST['tel'];
                $email   = $_POST['email'];
                $nom    = stripslashes($nom);
                $prenom  = addslashes($prenom);
                $tel     = ucwords(strtolower($tel));
                $email   = stripslashes($email);

                $query = "SELECT * FROM utilisateurs WHERE tel = '$tel'";
                $result = mysqli_query($con, $query);
                
                if (mysqli_num_rows($result) == 0) {
                    // Le nom n'existe pas encore, donc l'enregistrer dans la base de données
                } else {
                    echo '<h4 class="alert">Ce candidat a déja été enregistré</h4><button class="balert"><a href="index.php">Retour</a></button>';
                    exit;
                }
        ?>
    <body onunload="window.history.forward();">
        <form action="test-start.php" method="post" enctype="multipart/form-data">
            <div class="user-img">
                <img src="user1.jpeg" id="photo">
                <input type="file" id="file" name="file" required>
                <input type="hidden" name="MAX_FILE_SIZE" value="250000000">
                <label for="file" id="uploadbtn"><img class="select" src="user.jpeg"></label>
            </div>
            <h2>Curriculum Vitae (C.V)</h2><br>
            <u><h4>Information generale :</h4></u><br>
            <div class="box1">
                <label for="nom">Nom : </label><input type="text" id="nom" name="nom" value="nom" required><br><br>
                <label for="sexe">sexe :</label>
                <label for="sexe">Masculin : </label><input type="radio" value="masculin" id="sexe" name="sexe" required>
                <label for="sexe">Feminin : </label><input type="radio" value="feminin" id="sexe" name="sexe" required><br><br>
                <label for="tel">Adresse : </label><input type="text" id="tel" maxlength="9" required name="tel"><br><br>
            </div>
            <div class="box2">
                <label class="in" for="age">Age : </label><input type="number" id="age" name="age" required><br><br>
                <label class="in" for="email">Email : </label><input type="email" id="email" name="email" required><br><br>
                <label for="poste">Poste : </label><input type="text" id="poste" required name="poste">
                </div>
            <h4 class="t2">Etudes :</h4>
            <div class="box3">
                <label for="primaire">Primaire : </label><input type="text" id="primaire" name="primaire" required><br><br>
                <label for="lycee">Lycee : </label><input type="text" id="lycee" name="lycee" required>
            </div>
            <div class="box4">
                <label for="universite">Universite : </label><input type="text" id="Universite" name="universite" required><br><br>
                <label for="diplome">Diplomes : </label><input type="text" name="diplome" id="diplome" name="diplome" required>
            </div>
            <h4 class="t3">Experience professionnelle :</h4>
            <div class="box5">
                <label for="xp">Decriver votre experience professionnelle : </label><input type="text" id="xp" name="xp" required>
            </div>
            <h4 class="t4">Langues :</h4>
            <div class="box6">
               <label for="langues">Francais : </label><input type="radio" value="francais" id="langues" name="langues" required>
               <label for="langues">Anglais : </label><input type="radio" value="anglais" id="langues" name="langues" required>
               <label for="langues">Arabes : </label><input type="radio" value="arabes" id="langues" name="langues" required>
               <label for="langues">Autres : </label><input type="radio" value="autres" id="langues" name="langues" required>
            </div>
            <h4 class="t5">Commentaire</h4>
            <div class="box7">
                <label for="exprimer">Exprimez-vous : </label><input type="text" id="exrimer" name="exprimer" required>
            </div>
                <input type="hidden" id="pwd" name="pwd" value="<?php echo $pwd; ?>">
                <input type="hidden" id="nom1" name="nom1" value="<?php echo $nom; ?>">
                <input type="hidden" id="prenom" name="prenom" value="<?php echo $prenom; ?>">
                <input type="hidden" id="tel1" name="tel1" value="<?php echo $tel; ?>">
                <input type="hidden" id="email1" name="email1" value="<?php echo $email; ?>">
                <input type="submit" value="soumettre" id="submit">
        </form>
        <script>
            const imgDiv = document.querySelector('.user-img');
            const img = document.querySelector ('#photo');
            const file = document.querySelector ('#file');
            const uploadebtn = document.querySelector ('#uploadbtn');


            file.addEventListener( 'change' , function(){
            const chosedfile = this.files[0];
            if(chosedfile){
            const reader = new FileReader();

            reader.addEventListener( 'load' , function(){
            img.setAttribute ('src' , reader.result);
            })
            reader.readAsDataURL (chosedfile);
            }
            })
        </script>
    </body>
</html>