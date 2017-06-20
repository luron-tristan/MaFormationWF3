<style>
    * {font-family: sans-serif;}
    h3 {padding: 10px; background-color: darkred; color: white;}
</style>
<?php
echo "<h3>Page 1</h3>";
// Sur page1.php et page2.php mettre un titre avec le nom de la pgae et un lien qui permet de passer d'une page vers l'autre.
echo "<a href='page2.php?article=jean&couleur=bleu&prix=40'>Lien vers Page 2</a>";
// Voir la page2.php pour voir les explications sur $_GET