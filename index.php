<?php
// Dire au fichier qu'on utilise cette classe
use Controllers\Errors;
use Controllers\Teams;


// charge les classes...
spl_autoload_register(function ($class) {
  $parts = explode('\\', $class);
  $className = array_pop($parts);
  $path = implode(DIRECTORY_SEPARATOR, $parts);
  $file = $className.'.php';
  require strtolower($path) . DIRECTORY_SEPARATOR . $file;
});

$data = explode('/', substr($_SERVER['REQUEST_URI'], 1));
array_shift($data);


// Dans ce fichier que des controllers

//if 'route' exists then get route else teams
$route = $data[0] ? $data[0] : 'teams';


if ($route === 'teams') {
  $controller = new Teams;
  // on appelle la méthode la classe Teams
  if (isset($data[1])) {
    $controller->showTeam($data[1]);
  } else {
    $controller->listTeams();
  }

} else {
  $controller = new Errors;
  $controller->error404();
}


?>
