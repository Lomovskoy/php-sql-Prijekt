<?php ob_start() ?>
<h2> Города Эстонии </h2><article>
    <?php
    $textP = '';
    foreach ($maa_list as $maakond_row) {
        $text = '';
        $text.= '<ul>'; // список городов в уезде
        $k = 0; // количество городов в уезде
        foreach ($cities_list as $city_row) {
            if ($maakond_row->id_maakond == $city_row->id_maakond) {
                $k++;
                $text.= '<li style="padding-top:10px" > <a  href="cities?city=' . $city_row->id_city . '" >' . $city_row->city . '</a></li>';
            }
        }
        $text.= '</ul>';

        $title = '<h3>' . $maakond_row->name_maakond . ' maakond(' . $k . ')</h3>';
        $textP.=$title . $text;
    }
    echo $textP;
    //$news_row->title="";
    ?>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>
