<?php

if (count($argv) != 3) {
    echo "Usage: php agecli.php <name> <birth year>\n";
    exit(1);
}

$name = $argv[1];
$birthYear = $argv[2];

$age = date('Y') - $birthYear;

if ($age >= 18) {
    echo "You are a voter\n";
}

if ($age >= 60) {
    echo "You are a senior citizen\n";
}

echo "Your name is $name, and your age is $age years old\n";

?>