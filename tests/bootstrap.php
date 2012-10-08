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
	echo getcwd () . "\n\n";
	chdir('tests');
	echo getcwd () . "\n\n";
	
	if ($handle = opendir(getcwd())) {
    echo "Directory handle: $handle\n";
    echo "Files:\n";

    /* Das ist der korrekte Weg, ein Verzeichnis zu durchlaufen. */
    while (false !== ($file = readdir($handle))) {
        echo "$file\n";
    }

    /* Dies ist der FALSCHE Weg, ein Verzeichnis zu durchlaufen. */
    while ($file = readdir($handle)) {
        echo "$file\n";
    }

    closedir($handle);
}
	
	
	echo "--------------------------\n\n";
	echo "\n";
    if (file_exists($file)) {
		echo "require $file \n";
        require $file;
    }
}

spl_autoload_register('loader');