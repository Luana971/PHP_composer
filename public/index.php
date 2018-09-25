<?php

    
    require __DIR__ . '/../vendor/autoload.php';

    use HelloWorld\SayHello;
    echo SayHello::world();
    echo '<br/>';

    use App\Wcs\Hello;
    echo Hello::talk(); 



