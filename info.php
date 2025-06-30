<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Saisi d'information</h1>
    <form action="info.php" method="post">
        <label for="">Taper votre nom: </label>
        <input type="text" name="nom" > <br>
        <label for="">taper votre prenom: </label>
        <input type="text" name="prenom"> <br>
        <label for="">taper votre date de naissance: </label>
        <input type="date" name="date"> <br>
        <input type="submit" value="Sauvegarder" name="sub">
    </form>

</body>
</html>

<?php
if($_POST){
    $nom=trim($_POST['nom']);
    $prenom=trim($_POST['prenom']);
    $dns=$_POST['date'];
    $arr=array(
        "nom"=>$nom,
        "prenom"=>$prenom,
        "dns"=>$dns
    );
//json_encode()permet de creer un objet json
    $obj=json_encode($arr);
    $fp=fopen("info.json", "w");
    fwrite($fp,$obj);
    fclose($fp);
    
    echo "sauvgarder avec succees.";
}
?>