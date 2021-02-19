<?php

function hello(){
	for($i = 0; $i < 10; $i++){
		echo 'Hello World <br>';
	}
}

function hellopuce(){
	echo '<ul>';
	for($i = 0; $i < 10; $i++){
		echo '<li>Hello World </li><br>';
	}
	echo '</ul>';
}

function loto(){
	 $tirage=[];

	for ($i=0;$i<5;$i++){
		$tirage[$i]=rand()%50;
		echo $tirage[$i];
		echo "<br>";
	}

}

function lotoN($n){
	 $tirage=[];
	 echo '<table>';
	 echo '<tr>
			<td>	</td>
			<td>Chiffre 1</td>
			<td>Chiffre 2</td>
			<td>Chiffre 3</td>
			<td>Chiffre 4</td>
			<td>Chiffre 5</td>
			</tr>';

	for ($j=1;$j<=$n;$j++){
		if($j%2!=0){
		echo'<tr class="test">';}
		else {
		echo'<tr>';}
		echo '<td> Tirage '.$j.'</td>';
		for ($i=0;$i<5;$i++){
			$tirage[$i]=rand()%50;

			echo '<td>';
			echo $tirage[$i];
			echo "</td>";
		}
		echo '</tr>';
	}
	echo '</table>';
}


function formulaire(){
	echo '<form>';
	for ($i=0;$i<5;$i++){
		echo '<input type="text" name=input n°'.$i.'/>';
	}
	echo '<input type=submit value=ok />';
	echo '</form>';
}

  /***
   * Get first form.
   */
function form_register(){
  // load views
  require 'view/form_register.php';
}



function utilisateur(){
 $utilisateur=array(
	'nom'               => 'dhaouadi',
	'Prenom'            => 'testeuh',
	'date de naissance' => '01/01/2000',
	'mail'              => 'ahmed.dhaouadi@etu.univ-lyon1.fr',
	'mdp'               => 'Motdepasse'
);

	echo '<table>';
	foreach ($utilisateur as $key => $val) {
		echo '<tr>';
			echo '<th>'. $key .'</th>';
			echo '<td>'. $val .'</td>';
		echo'</tr>';
	}
	echo '</table>';
}
?>
