<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */
//
return array(

	'*' => array(
		'tablePrefix' => 'craft',
	),
	'http://127.0.0.1:8888/craft/public' => array(
			'server' => '127.0.0.1',
			'user' => 'root',
			'password' => '',
			'database' => 'para',
	),
	'paradata.herokuapp.com' => array(
			'server' => $url[“host”],
			'user' => $url[“user”],
			'password' => $url[“pass”],
			'database' => substr($url[“path”],1),
	),

	// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
	// 'server' => '127.0.0.1',
	//
	// // The name of the database to select.
	// 'database' => 'para',
	//
	// // The database username to connect with.
	// 'user' => 'root',
	//
	// // The database password to connect with.
	// 'password' => '',
	//
	// // The prefix to use when naming tables. This can be no more than 5 characters.
	// 'tablePrefix' => 'craft',

);

// $url=parse_url(getenv(“CLEARDB_DATABASE_URL”));
//
// return array(
//
// ‘server’ => $url[“host”],
// ‘database’ => substr($url[“path”],1),
// ‘user’ => $url[“user”],
// ‘password’ => $url[“pass”],
// ‘tablePrefix’ => ‘craft’,
//
// );
