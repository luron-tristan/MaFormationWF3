<?php
// Récupérer 5 images sur le web et les renommer de cette façon:
// image1.jpg
// image2.jpg
// image3.jpg
// image4.jpg
// image5.jpg

// - 1. Afficher une image avec une balise img
// - 2. Afficher une image 5 fois toujours en écrivant une seule balises img
// - 3. Afficher les 5 images différentes toujours en écrivant une seule balise img

echo "<h1>- 1. Afficher une image avec une balise img</h1>";

echo '<img src="image3.jpg" alt="photo femme" width="300"><hr>';


echo "<h1>- 2. Afficher une image 5 fois toujours en écrivant une seule balise img</h1>";

for($i = 0; $i < 5; $i++)
{
    echo '<img src="image5.jpg" width="300" alt="photo femme">';
};
echo "<hr>";


echo "<h1>- 3. Afficher les 5 images différentes toujours en écrivant une seule balise img</h1>";

for($i = 1; $i <= 5; $i++)
{
    echo '<img src="image' . $i . '.jpg" width="300" alt="photo femme">';
};
echo '<hr>';