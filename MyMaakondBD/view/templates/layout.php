<html>
<head>
<link href="public/css/bootstrap.min.css" rel="stylesheet">
<link href="public/css/mystyle.css" rel="stylesheet">
</head>

<body>
    <div class="container">
      <div class="header clearfix">

        <h3 class="text-muted">
          <?php 
		  echo '<a href="'.$_SERVER['PHP_SELF'].'">Главная </a>';
		  echo '  &#187 <a href="maakonnad"> Уезды </a>';
                  echo '  &#187 <a href="cities"> Города </a>';
                  echo '  &#187 <a href=gallery> Галерея </a>';
		  echo '  &#187 <a href="contact"> Контакт </a>';
                  
		  ?>
		  
        </h3>
      </div>
	  
      <div id="content" style="padding-top:20px; ">
		
			<?php echo $content; ?>
		
      </div>
      <footer class="footer">
        <p>&copy; 2017 Design <i class="fa fa-child"></i></p>
      </footer>

    </div> <!-- /container -->
</body>
</html>