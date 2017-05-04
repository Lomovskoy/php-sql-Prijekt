<?php ob_start() ?>
<h2> Уезды </h2><article>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Уезд</th>
                <th>Столица</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($maa_list as $maa_row) {
                echo '<tr><td>' . $maa_row->name_maakond . ' maakond</td> ';
                echo '<td>' . $maa_row->capital . '</td>';
                echo '<td><span style="font-size:12px;"><a href="maakonnad?id=' . $maa_row->id_maakond . '">More</span>  &#187 </a></td></tr>';
            }
            ?>
        </tbody>
    </table>
</article>
<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php"; ?>