<?php

// set directory
chdir(__DIR__);
require 'init.i.php';

$persons = \Tourbase\Iterator::query('Tourbase\Model\Person\Person', 'iscustomer = TRUE');
foreach ($persons as $key => $person) {
	printf("* %d. %s %s (#%d)\n", $key, $person->namefirst, $person->namelast, $person->id);
}

