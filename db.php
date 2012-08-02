<?php
/**
 * Define the DB connection details separately so that 
 * they are not publicly available in github. 
 *
 */

/**
 * Hostname and port mysql is running on (can't use localhost)
 */
define('DB_HOST',   'yallara.cs.rmit.edu.au:51597');
/**
 * Name of database to connect to
 */
define('DB_NAME',   'winestore');
/**
 * Username to connect with
 */
define('DB_USER',   'winestore');

/**
 * Password to connect with
 */
define('DB_PW',     'secret');
?>
