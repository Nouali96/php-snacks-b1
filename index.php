<?php
// Snack 2
if (strlen($_GET['name']) <= 3){
    echo "Il nome deve avere più di tre caratteri";
    echo  "<br> Accesso negato";
}
else if (strpos($_GET['email'],'@') == false){
    echo "Nella email deve esserci '@'";
    echo "<br> Accesso negato";   
}
else if (strpos($_GET['email'],'.') == false){
    echo "Nella email deve esserci '.'";
    echo "<br> Accesso negato";    
}
else if (is_numeric($_GET['age']) == false){
    echo "Inserisci un numero";
    echo "<br> Accesso negato";
}
else {
    echo "Accesso riuscito";
}

// Snack 5
$testo = "ciao.pierino.come.stai.";
if (strpos($testo,'.') == true){
    $testo = str_replace('.','.<br>', $testo);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <div>
            <input type="text" name="name" placeholder="Inserisci nome">
            <input type="text" name="email" placeholder="Inserisci email">
            <input type="text" name="age" placeholder="Inserisci età">
            <button type="submit">Accedi</button>
        </div>
        <h2><?php echo "$testo"; ?></h2>
    </form>
    
</body>
</html>