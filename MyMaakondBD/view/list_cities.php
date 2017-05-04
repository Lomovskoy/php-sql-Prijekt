<?php ob_start() ?>
<h2> Город </h2><article>
    <?php
    echo '<p><b>Код города: </b>' . $city_one->id_city;
    echo '<p><b><span style="font-size:16px;">' . $city_one->city . '</span></b>&nbsp; ';
    echo 'Количество жителей: <b>' . $city_one->people . '</b></p>';
    echo '<p><b>Код уезда: </b>' . $city_one->id_maakond;
    echo ' <span style="font-size:12px;"><a href="cities"><br><br>К списку  &#187 </a></span></p>';
    //echo '';			
    //echo '<div style="clear:both;"></div>';
    ?>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>