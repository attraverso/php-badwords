<?php 

$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit Est obcaecati labore voluptates blanditiis sunt beatae voluptatibus ad quod quasi nam vitae debitis laborum, expedita voluptate voluptatem libero unde Animi accusamus';

$sentence_length = strlen($sentence);

$chinese_censorship_levels_of_nonsense = $_GET['badword'];

if(!empty($chinese_censorship_levels_of_nonsense)) {

$happy_censor = str_ireplace($chinese_censorship_levels_of_nonsense, '***', $sentence);

} else {
  $badword = 'not-given';
  $happy_censor = $sentence;
}

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