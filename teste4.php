<?php

    function generate(){

        for($index = 1; $index <= 3; $index++){

            yield $index;

        }

    }

    $generator = generate();

    if (isarray($generator)) {

        echo "Is Array";

    } elseif (isobject($generator)) {

        echo "Is Object";

    } elseif (isstring($generator)) {

        echo "Is String";

    } elseif (isfunction($generator)) {

        echo "Is Function";

    } else {

        echo "Is none of the avove";

    }

?>
