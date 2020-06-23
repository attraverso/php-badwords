<?php 

$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit Est obcaecati labore voluptates blanditiis sunt beatae voluptatibus ad quod quasi nam vitae debitis laborum, expedita voluptate voluptatem libero unde Animi accusamus';

$sentence_length = strlen($sentence);
if (!empty($_GET)) {
$chinese_censorship_levels_of_nonsense = $_GET['badword'];
}

$nrCensored = 0;
if(!empty($chinese_censorship_levels_of_nonsense)) {

$happy_censor = str_ireplace($chinese_censorship_levels_of_nonsense, '***', $sentence, $nrCensored);

} else {
  $chinese_censorship_levels_of_nonsense = 'N/A';
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
  <p><b>Source text:</b></p> 
  <p><?php echo $sentence ?></p>
  <p><b>Text length:</b> <?php echo $sentence_length ?></p>
  <p><b>Censored word:</b> <?php echo $chinese_censorship_levels_of_nonsense ?></p>
  <p><b>Censored text:</b></p>
  <p><?php echo $happy_censor?></p>
  <p><b>Word censored <?php echo $nrCensored ?> time(s).</b></p>
</body>
</html>