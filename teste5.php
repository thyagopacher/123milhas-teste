
<?php

    $fruits = array(

        'sweet' => 'banana',

        'refreshing' => 'laranja',

        'strange' => 'avocado'

    );

    asort($fruits);

    echo current($fruits). "\n";

    ksort($fruits);

    echo current($fruits) . "\n";

    krsort($fruits);

    echo current($fruits) . "\n";

?>