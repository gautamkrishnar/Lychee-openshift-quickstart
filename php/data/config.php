<?php

###
# @name			Configuration
# @author		Tobias Reich
# @copyright	2015 Tobias Reich
###

if(!defined('LYCHEE')) exit('Error: Direct access is not allowed!');

# Database configuration
$dbHost = getenv("OPENSHIFT_MYSQL_DB_HOST");
$dbUser = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$dbPassword = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$dbName = getenv("OPENSHIFT_APP_NAME");
$dbTablePrefix = ''; # Table prefix

?>
