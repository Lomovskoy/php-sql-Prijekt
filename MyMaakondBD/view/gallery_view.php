<?php ob_start() ?>
<h2> Галерея </h2><article>
    <table class="table table-striped">
        <thead>
        </thead>
        <tbody>
            <?php
            foreach ($gall_list as $gall_row) {
                echo '<tr>';
                echo '<td><img src="images/' . $gall_row->picture. '">' . 
                        'Код галереи &#8470; ' . $gall_row->id_gallery . ', ' . 
                        'Код города &#8470; ' . $gall_row->id_city . '</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>