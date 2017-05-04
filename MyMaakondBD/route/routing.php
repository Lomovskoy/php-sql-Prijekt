<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num=substr_count($host,'/');
$uri  = explode('/', $host)[$num];

if ($uri == '' OR $uri == 'index.php' )
{
	// Главная страница - адм деление
	$controller = new Controller();
	$response = $controller->start_site();
}

elseif($uri == 'maakonnad' && !isset($_GET['id'])) {
    //список уездов !isset($_GET['id'] 
    // не передан !isset
    $controller = new Controller();
    $response = $controller->maakonnad_list();
}

elseif($uri == 'maakonnad' && isset($_GET['id'])) {
    //детальная запись уездов isset($_GET['id']
    // передан isset
    $controller = new Controller();
    $response = $controller->maakonnad_view($_GET['id']);
}

elseif($uri == 'cities' && !isset($_GET['city']))/*см. в Layout*/ {
    $controller = new Controller();
    $response = $controller->cities_list();
}

elseif($uri == 'cities' && isset($_GET['city']))/*см. в Layout*/ {
    $controller = new Controller();
    $response = $controller->cities_view($_GET['city']);
}

elseif($uri == 'gallery')/*см. в Layout*/ {
    $controller = new Controller();
    $response = $controller->gallery_list();
}

elseif ($uri == 'contact' )
{	// Просмотр контактов
	$controller = new Controller();
	$response = $controller->contact_view();
}
else
{	// Страница не существует
	$controller = new Controller();;
	$response = $controller->error_404();
}
?>