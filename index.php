<!-- Passare due argomenti allo script: nome e cognome. Lo script dovrà salutare l'interlocutore -->
<?php 


$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit Est obcaecati labore voluptates blanditiis sunt beatae voluptatibus ad quod quasi nam vitae debitis laborum, expedita voluptate voluptatem libero unde Animi accusamus';

$CHN_censorship_levels_of_nonsense = $_GET['badword'];

$happy_censor = str_replace($CHN_censorship_levels_of_nonsense, '***', $sentence);

echo $happy_censor;
?>


<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in get con tre * -->