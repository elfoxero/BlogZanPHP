<?php
/* ex: set tabstop=2 noexpandtab: */
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

/**
 *	SQL Databases
 */
$ZP["db"]["dbPDO"] 	  = FALSE;
$ZP["db"]["dbDriver"] = "mysqli";
$ZP["db"]["dbHost"]   = $_SERVER['DB1_HOST'];
$ZP["db"]["dbUser"]   = $_SERVER['DB1_USER'];
$ZP["db"]["dbPwd"] 	  = $_SERVER['DB1_PASS'];
$ZP["db"]["dbName"]   = $_SERVER['DB1_NAME'];
$ZP["db"]["dbPort"]   = $_SERVER['DB1_PORT'];
$ZP["db"]["dbPfx"] 	  = "zan_";
$ZP["db"]["dbSocket"] = NULL;

/**
 *	SQLite Databases
 */
$ZP["db"]["dbFilename"] = "mydatabase.db";
$ZP["db"]["dbMode"]	    = 0666;
	
/**
 *	NoSQL Databases
 */
$ZP["db"]["dbNoSQLHost"]  	 = "localhost";
$ZP["db"]["dbNoSQLPort"] 	 = 27017;
$ZP["db"]["dbNoSQLUser"] 	 = ""; 
$ZP["db"]["dbNoSQLPwd"]  	 = "";
$ZP["db"]["dbNoSQLDatabase"] = "";