<!-- Заголовок title -->
<?php $title = 'Контакт'; ?>

<?php ob_start() ?>
<h2>Контакт </h2>
<article>	
   	<h3>Ida-Virumaa Kutsehariduskeskus</h3>
	<p >
    <br>
    <b>Aadress:</b> Kutse 13, 41533 Jõhvi, Ida-Virumaa<br>
 <b>Telefon:</b> 332 0381<br>
 <b>E-post:</b> info@ivkhk.ee<br>

 	</p>

</article>

<?php $content = ob_get_clean(); ?>

<?php include "view/templates/layout.php";