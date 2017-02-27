<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19,
];

echo 'Les valeurs de base sont :<br /><br />';
foreach ($students as $student => $note) {
    echo "- $student : $note<br />";
}
echo '<br />';
echo 'La moyenne est : '.array_sum($students)/count($students).'<br />';
echo '<br />Et hop !';

?>