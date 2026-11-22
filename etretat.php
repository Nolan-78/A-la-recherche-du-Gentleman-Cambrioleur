<?php
session_start();

require 'flight/autoload.php';
//empeche flight de gerer les erreurs, laisse le serveur Apache/PHP le faire
Flight::set('flight.handle_errors',false);

Flight::route('GET|POST /etretat', function() {
    if (empty($_POST['user'])) {
        $user = 'Inspecteur Gadget';
    }else{
        $_SESSION['user'] = $_POST['user'];
    }
    Flight::render('leaflet_lupin', ['user'=> $user]);
});

Flight::start();

?>


