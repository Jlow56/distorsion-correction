<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
session_start();

require "configuration/autoload.php";

$router = new Router();
$router->handleRequest($_GET);