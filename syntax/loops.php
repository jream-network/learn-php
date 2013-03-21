<?php
// Loops

$data = [
    'height' => [
        'Tall',
        'Small',
        'Medium',
        'Mini'
    ],
    'weight' => [
        '150',
        '200',
        '250'
    ]
];

$i = 0;
while($i < 50) {
    echo $i;
    $i++;
}

//for ($i = 0; $i < count($data); $i++) {
//    echo $data[$i];
//    echo '<br />';
//}

//foreach($data['height'] as $_key => $_value) {
//    echo $_value;
//}
//echo '<hr />';
//foreach($data['weight'] as $_key => $_value) {
//    echo $_value;
//}

//foreach($data as $_key => $_value) {
//    echo $_key . ': ';
//    
//    foreach ($_value as $__value) {
//        echo $__value . '<br />';
//    }
//    
//    echo '<br />';
//}