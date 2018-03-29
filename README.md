# Title
Blog Application in CI ( For Beginners )

# Getting Started

* **Step 1.** Pull or clone Project Repository "[here link] (https://github.com/om7271prakash/CI)".

**Note:** The above Database Schema has create for Database Named "ci".

* **Step 2.** Fill your Base URL in ./application/config/config.php
```
$config['base_url'] = '<ENTER YOU BASE URL HERE>';
```
* **Step 3.** Fill your Database Detail in ./application/config/database.php
```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => '',
	'username' => '',
	'password' => '',
	'database' => 'ci',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
* **Finally** Now your project is ready to go.

# Additional Functionality
*I have added the signup functionality in the project.*
