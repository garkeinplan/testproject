<?php

function loader($class)
{
    $file = $class . '.php';
	echo $file . "\n";
	
	var_dump (file_exists($file));
	echo "\n";
	var_dump (file_exists('/home/travis/builds/garkeinplan/testproject/tests/' . $file));
	echo "\n";
	echo "--------------------------\n";
	print_r ($_SERVER);
	echo "--------------------------\n\n";
	echo "\n";
    if (file_exists($file)) {
		echo "require $file \n";
        require $file;
    }
}

spl_autoload_register('loader');