<?php
// Args

// Generalize it..
function hello($person, $age = 28) {
    echo "Hello, $person. How are you today?<br />";
    echo "Are you still $age years old?";
}

hello('Jesse', 30);