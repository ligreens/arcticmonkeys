<?php
use App\Controllers\Controller;
use App\Database;
use App\Models\Model;

$baseDir = __DIR__ . '/..';

require $baseDir . '/app/database.php';
require $baseDir . '/app/Models/model.php';
require $baseDir . '/app/Controllers/comments.php';


//$config = require('../config/config.php');
//$db = new App\Database($config);

//$controller = new Controller($db);
//$controller->index();

//Sökväg till grundmappen i projektet

// Ladda in Composers autoload-fil
require  '../vendor/autoload.php';

// Ladda konfigurationsdata
$config = require  $baseDir . '/config/config.php';

$db = new Database($config['user'], $config['password'], $config['host'], $config['dbname'], $config['options']);

// Normalisera url-sökvägar
$path = function($uri) {
    $uri = ($uri == '/') ? $uri : rtrim($uri, '/');
    $uri = explode('?', $uri);
    $uri = array_shift($uri);
    return $uri;
};

// Routing
$controller = new Controller($baseDir);
switch ($path($_SERVER['REQUEST_URI'])) {
	case '/':
	    $model = new Model($db);
	    $comments = $model->get_comments();
	    $member = $model->get_member_by_name('');
	    $albums = $model->get_songs('');

	    $comment = new \App\Controllers\Comments($db);
        $comment->delete_comments();

	    require $baseDir.'/views/index.php';
    break;
	    case '/concert':
        require $baseDir.'/views/concert.php';


        break;
	default:
		header('HTTP/1.0 404 Not Found');
		echo 'Page not found';
	break;
}
