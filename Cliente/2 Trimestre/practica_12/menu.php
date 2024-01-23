<?php
    if ($_REQUEST['cod'] == 1){
        echo "Disfruta de la exploción de sabores de esta hamburguesa legendaria";
        echo "<br>";
        echo '<img src="img/rocky2.png" ; alt="Descripción de la imagen">';
        echo '<div style="background-color: #ffffff; padding: 20px; border-radius: 10px;">';
            echo "<p> Hamburguesa Rocky - ⭐⭐⭐⭐⭐ </p>";
            echo "<p>¡La hamburguesa Rocky es una verdadera obra maestra para los amantes de la carne! 
            Con una jugosa carne a la parrilla, queso derretido y una combinación perfecta de aderezos, 
            esta hamburguesa realmente te hará sentir como un campeón. La frescura de los ingredientes y la textura del pan 
            añaden un toque extra que la distingue. ¡Definitivamente, una experiencia culinaria digna de cinco estrellas!</p>";
        echo '</div>';
    }
 
    if ($_REQUEST['cod'] == 2){
        echo "Disfruta de este magnífico viaje en el tiempo";
        echo "<br>";
        echo '<img src="img/bigMcfly2.png" alt="Descripción de la imagen">';
        echo '<div style="background-color: #ffffff; padding: 20px; border-radius: 10px;">';
            echo "<p> Hamburguesa McFly - ⭐⭐⭐⭐</p>";
            echo "<p>Inspirada en el clásico favorito de todos los tiempos, la hamburguesa McFly ofrece un 
            viaje delicioso en el tiempo. Con una mezcla única de sabores, desde la salsa especial hasta 
            el crujiente de los ingredientes frescos, esta hamburguesa te hará sentir como si estuvieras 
            en una aventura culinaria. Aunque no es la opción más clásica, es una elección emocionante para 
            aquellos que buscan algo diferente y delicioso.</p>";
        echo '</div>';
    }
   
    if ($_REQUEST['cod'] == 3){
        echo " ¡Explora el ardiente sabor de la hamburguesa picante que despierta tus sentidos y enciende tu paladar con cada bocado!";
        echo "<br>";
        echo '<img src="img/chilindrina2.png" alt="Descripción de la imagen">';
        echo '<div style="background-color: #ffffff; padding: 20px; border-radius: 10px;">';
            echo "<p> Hamburguesa Chilindrina - ⭐⭐⭐⭐</p>";
            echo "<p>La hamburguesa Chilindrina es una opción vibrante y llena de sabor que seguramente 
            te sorprenderá gratamente. Con un toque picante justo, la combinación de ingredientes es simplemente 
            perfecta. El queso fundido, la frescura de las verduras y el toque de la salsa especial crean una experiencia 
            única. ¡Es una elección ideal para aquellos que buscan un poco de emoción en cada bocado!</p>";
        echo '</div>';
    }

    if ($_REQUEST['cod'] == 4){
        echo "Disfruta del auténtico sabor casero en cada mordisco de nuestra hamburguesa de la casa, preparada con amor y sazón inigualables.";
        echo "<br>";
        echo '<img src="img/classicsmash2.png" alt="Descripción de la imagen">';
        echo '<div style="background-color: #ffffff; padding: 20px; border-radius: 10px;">';
        echo '<p>Hamburguesa Clásica - ⭐⭐⭐⭐⭐</p>';
            echo '<p>La hamburguesa clásica es una opción que nunca pasa de moda. Con una carne perfectamente sazonada, queso derretido y los aderezos 
            tradicionales, esta hamburguesa te transportará a la esencia original de este delicioso plato. La calidad de los ingredientes y la atención a 
            los detalles hacen que esta opción clásica sea una opción infalible para aquellos que buscan la auténtica experiencia de hamburguesa. 
            ¡Sencillamente deliciosa!</p>';
        echo '</div>';
    }
?>