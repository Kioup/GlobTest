<?php

// Ceci est le fichier de retour du test de Globalis effectué par Kiril Pavelek
// Temps de réalisation estimé : ??

// question 1
echo "<h2>Question 1</h2><br/><p>Expliquez, en quelques lignes, ce que fait cette fonction.</p>";

// réponse
echo "<p>Cette fonction foo() prend un tableau en entré et retourne également un tableau de tableau.<br>
	La fonction semble avoir pour rôle de lire les index du tableaux fourni en paramètre puis d'en extraire la plus petite valeur, ainsi que la plus grosse et de les retourner en tant qu'index d'un tableau de tableaux.<br/>
	Il semble y avoir quelques exceptions ou la fonction retourne plusieur tableaux dans le tableau de retour... je n'ai pas pu résoudre convenablement ce problème. Ceci dit c'est toujours le tableau dont la somme des index est la plus hautes qui est retournée en second</p>";

// question 2

echo "<h2>Question 2</h2><br/><p>Codez cette fonction. Merci de fournir un fichier contenant :<br/><ul><li>la fonction,</li><li>l'appel de la fonction, avec un jeu de test en entrée,</li><li>l'affichage du résultat en sortie.</li></ul></p>";

function foo($tab){
	if (is_array($tab) && sizeof($tab) > 1){
		$petite_valeur = false;
		$grande_valeur = false;
		foreach ($tab as $mtab) {
			foreach($mtab as $value){
				if (!$petite_valeur && $petite_valeur !== 0){
					$petite_valeur = $value;
				} else {
					if ($petite_valeur > $value){
						$petite_valeur = $value;
					}
				}
				if (!$grande_valeur && $grande_valeur !== 0){
					$grande_valeur = $value;
				} else {
					if ($grande_valeur < $value){
						$grande_valeur = $value;
					}
				}
			}
		}
	}
	return ([[$petite_valeur, $grande_valeur]]);
}
echo "<pre>";
print_r(foo([[0, 3], [6, 10]]));
print_r(foo([[0, 5], [3, 10]]));
print_r(foo([[0, 5], [2, 4]]));
print_r(foo([[7, 8], [3, 6], [2, 4]]));
print_r(foo([[3, 6], [3, 4], [15, 20], [16, 17], [1, 4], [6, 10], [3, 6]]));
echo "</pre>";

// question 3    

echo "<h2>Question 3</h2><br/><p>Précisez en combien de temps vous avez implémenté cette fonction.</p>";

// réponse

echo "<p>Je n'ai pu codé que la première partie de la fonction vu que je ne l'ai pas cerné entièrement. L'affichage aurait pu être conditionné par des if(...) else (...) mais j'imagine que ce n'est pas le but.<br/>
	Temps de codage : 15min<br/>
	Debbugage : 15min</p>";









?>