<?php

require_once 'config.php';
require_once PATH_ROOT.'/controllers/home.php';
require_once PATH_ROOT.'/controllers/login.php';
require_once PATH_ROOT.'/controllers/signin.php';
require_once PATH_ROOT.'/controllers/logout.php';



$action = $_GET['action'] ?? 'home';



if ($action === 'home') {
    homeAction();
} else if ($action === "login"){
    loginAction();
} else if ($action === "signin"){
    signinAction();
} else if ($action === "logout"){
    logoutAction();
}
