<?php

// set directory
chdir(__DIR__);
require 'init.i.php';

// load person #3
$person = \Tourbase\Model\Person\Person::load(3);

// change their information
$person->namecompany = 'Self-Employed';

// issue update command
$person->update();
