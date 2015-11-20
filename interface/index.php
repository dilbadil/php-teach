<?php 

require "LoggerInterface.php";
require "LoggerFile.php";
require "LoggerDB.php";
require "LoggerDropbox.php";
require "UsersController.php";

$logger = new LoggerDB();
// $controller = new UsersController($logger, [ 'sdjfsldakfsdf' ]);
hello();
