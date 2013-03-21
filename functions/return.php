<?php
// Return

function add_years($age, $add_years) {
    $age += $add_years;
    return $age; // 1 Return per function
}

add_years(26, 5);


?>
<html>
<body>

    <h1><?=add_years(25, 5)?></h1>
    <h1><?php echo $joe?></h1>
    <h1><?php echo $ted?></h1>
    
</body>
</html>