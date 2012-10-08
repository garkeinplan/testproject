<?php

function loader($class)
{
    $file = './tests/' .$class . '.php';
	echo $file . "\n";
	
	var_dump (file_exists($file));
	echo "\n";
	echo "--------------------------\n";
	print_r ($_SERVER);
	echo "--------------------------\n\n";
    if (file_exists($file)) {
		echo "require $file \n";
        require $file;
    }
}

spl_autoload_register('loader');