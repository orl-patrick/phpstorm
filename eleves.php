<?php

// --- script devant etre lance dans la console (php eleves.php)

// --- initialisation du tableau
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19,
];

// --- restitution du tableau
echo "\nLes notes obtenues par les élèves sont :\n\n";
foreach ($students as $student => $note) {
    echo "- $student : $note\n";
}

// --- affichage du resultat
echo "\n";
$nbeleves = count($students);
echo "La moyenne est : ".array_sum($students)/$nbeleves." ($nbeleves élèves)\n";
echo "\nEt hop !\n\n";

?>