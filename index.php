<!-- Passare due argomenti allo script: nome e cognome. Lo script dovrà salutare l'interlocutore -->
<?php 


$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit Est obcaecati labore voluptates blanditiis sunt beatae voluptatibus ad quod quasi nam vitae debitis laborum, expedita voluptate voluptatem libero unde Animi accusamus';

$sentence_length = strlen($sentence);

$chinese_censorship_levels_of_nonsense = $_GET['badword'];

$happy_censor = str_replace($chinese_censorship_levels_of_nonsense, '***', $sentence);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>Automated censor</h1>
  <p><b>Testo originale:</b></p>
  <p><?php echo $sentence ?></p>
  <p><b>Lunghezza del testo:</b> <?php echo $sentence_length ?></p>
  <p><b>Parola da censurare:</b> <?php echo $chinese_censorship_levels_of_nonsense ?></p>
  <p><b>Testo censurato:</b></p>
  <p><?php echo $happy_censor?></p>
</body>
</html>

<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in get con tre * -->