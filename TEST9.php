<html>
    <head>
        <title>TEST</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style6.css">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
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
            
            </SCRIPT>
    </head>
    <?php
session_start();
// Connexion à la base de données MySQL
$bdd = new PDO('mysql:host=localhost;dbname=talkwork', 'root', '');

// Vérifier les identifiants de connexion
if(isset($_POST['password'])) {
    $password = $_POST['password'];

    $query = $bdd->prepare('SELECT nom,prenom FROM utilisateurs WHERE password = :password');
    $query->execute(array(
        'password' => $password
    ));

    $user = $query->fetch();

    if($user) {
        // Utilisateur connecté
        $_SESSION['utilisateur'] = $user['nom'];
        $_SESSION['utilisateur'] .= " ";
        $_SESSION['utilisateur'] .= $user['prenom'];
    } else {
        echo 'Identifiants incorrects';
    }
}
$cpt=isset($_POST['cpt']) ? $_POST['cpt'] : 0;
$Q8=isset($_POST['Q8']) ? $_POST['Q8'] : 0;
if($Q8!=0 or $cpt!=0){
            
    if($Q8=="ul"){
       $cpt++;
}
}else{

    $cpt=isset($_GET['cpt']) ? $_GET['cpt'] : 0;
    if($Q8=="ul"){
       $cpt++;
}
}
?>
    <body onunload="window.history.forward()">
        <img src="OIP.jpeg" class="logo">
        <div class="user">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#0c0c0e" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg><h4><?=$_SESSION['utilisateur']?></h4>
        </div>
        <div class="start-screen">
            <button id="start-button">Start</button>
        </div>
        <div id="display-container">
            <div class="header">
                <div class="number-of-count">
                    <span class="number-of-question">
                        9 sur 10 questions
                    </span>
                </div>
                <div class="timer-div">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#0e0f11" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                    <div id="countdown"></div>
                </div>
            </div>
            <div id="container">
                <form action="TEST10.php" method="post">
                    <label for="Q9">Comment declarer un tableau en C ?</label><br><br>
                    <input type="radio" id="Q9" name="Q9" value="int tab[10];" ><label for="r1">  int tab[10];</label><br><br>
                    <input type="radio" id="Q9" name="Q9" value="tab[10] int;" ><label for="r2">  tab[10] int;</label><br><br>
                    <input type="radio" id="Q9" name="Q9" value="int[10]tab;" ><label for="r3">  int[10]tab;</label><br><br>
                    <input type="radio" id="Q9" name="Q9" value="int tab(10);" ><label for="r4">  int tab(10);</label>
                    </div>
                    <input type="hidden" name="cpt" id="cpt" value="<?php echo $cpt; ?>">
            <input type="submit" id="submit" value="Suivant" class="next-button">
        </div>
        </form>
        <div class="score-container hide">
            <div class="user-score">Demo Score</div>
            <button class="restart">Restart</button>
        </div>
            <script>
                  var countdown = 15; // Durée du compte à rebours en secondes
                  var timer = setInterval(function() {
                  countdown--;
                  document.getElementById('countdown').innerHTML = countdown + 's';
                  if (countdown == 0) {
                  clearInterval(timer);
                  window.location.href = 'TEST10.php?cpt=<?php echo $cpt; ?>'; // Passer à la question suivante
               }
               }, 1000);
            </script>
        </script>
    </body>
</html>