<?php
// BIF: Arrays

$data = [
    'Zoop',
    'Horse',
    'Bob',
    'Jen'
];

$data[] = 'Man';

array_unshift($data, 'Hello World');

array_pop($data);
array_shift($data);

if (in_array('Bob', $data)) {
    echo "He is here!";
} else {
    echo "Sorry :(";
}


echo '<pre>';
print_r($data);