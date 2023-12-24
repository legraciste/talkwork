<html>
    <head>
        <title>conclusion</title>
        <meta charset="utf-8">
        <link rel="shorcut icon" type="image/png" href="OIP.jpeg">
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
                margin-top: 5%;
            }
            h4{
                text-align: center;
                margin-top: 5%;
            }
            img{
                height: 80px;
                width: 80px;
                border-radius: 5px;
            }
            h3{
                text-align: center;
                margin-top: 5%;
            }
            .note{
                margin-top: 3%;
            }
            button{
                border: none;
                background-color: white;
                height: 35px;
                width: 120px;
                border-radius: 5px;
                margin-left: 45%;
                margin-top: 2%;
                transition: transform .1s;
            }
            button:hover{
                -ms-transform: scale(1.5);
                -webkit-transform: scale(1.5);
                transform: scale(1.5);
            }
            button a{
                text-decoration: none;
                color: black;
            }
            .t1{
                margin-top: 1%;
            }
        </style>
    </head>
    <body>
    <?php
    include_once 'dbConnection.php';
    $cpt=isset($_POST['cpt']) ? $_POST['cpt'] : 0;
$Q10=isset($_POST['Q10']) ? $_POST['Q10'] : 0;
if($Q10!=0 or $cpt!=0){
            
    if($Q10=="mark"){
       $cpt++;
}
}else{

    $cpt=isset($_GET['cpt']) ? $_GET['cpt'] : 0;
    if($Q10=="mark"){
       $cpt++;
}
    }
    $q6 = mysqli_query($con, "INSERT INTO note VALUES  (NULL, '$cpt')");
?>
        <img src="OIP.jpeg">
        <h1>Merci pour votre participation</h1>
        <h4>N'hesiter pas à recommander talkwork pour la gestion de recrutement dans vos entreprises</h4>
        <h4 class="t1">Votre candidature a été pris en compte et sera evaluée par l'entreprise</h4>
        <h3>** Note **</h3>
        <h3 class="note"><?=$cpt?>/10</h3>
        <button><a href="index.php">Acceuil</a></button>
    </body>
</html>