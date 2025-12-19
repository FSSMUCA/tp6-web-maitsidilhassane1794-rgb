<?php
    $etablissement = "SEMLALIA";
    $module = "WEB";
    $annee = 2025;
    $val1 = 8;
    $val2 = 20;
    $somme = $val1 + $val2;
    $produit = $val1 * $val2;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Info PHP</title>
    <style>
        body { font-family: sans-serif; background: #fce4e4; padding: 50px; }
        .info-card { background: white; padding: 20px; border-radius: 10px; border-top: 5px solid rgba(135, 32, 32, 0.88); }
    </style>
</head>
<body>
    shshshh
    <div class="info-card">
        <h1>Informations du Module</h1>
        <p><strong>Établissement :</strong> 
        <?php echo $etablissement; ?></p>
        <p><strong>Module :</strong>
         <?php echo $module; ?></p>
        <p><strong>Année :</strong>
        <?php echo $annee; ?></p>

        <h3>les résultats:</h3>
        <p>Addition de <?php echo "$val1+$val2"; ?> = <?php echo $somme; ?></p>
        <p>Multiplication de <?php echo "$val1*$val2"; ?> = <?php echo $produit; ?></p>
    </div>
</body>
</html>