<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
   <main>
    <h1>Resultado final!</h1>
    <p>
     <?php 
     
        // var_dump($_REQUEST)// $_GET $_POST $_COOKIES
        $numero = $_GET ['numero'] ?? 0;
        $ant  = $numero -1;
        $suc =  $numero +1;
        
        echo " O numero escolhido foi <strong>$numero</strong>";
        echo "<br>O seu antecessor é $ant";
        echo "<br>O seu sucessor é $suc"
 
     ?>
     </p>
    <button onclick = "javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
     </main>


</body>
</html>