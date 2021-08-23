
<?php

    $text = 'I like programming! :)';

    $match = 'programming';

    if (strpos($text, $match)) {

        echo "$text contains $match";

    } else {

        echo "$text does not contain $match";

    }

?>