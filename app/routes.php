<?php
$Router
->notSafe()


//->includeFile(__DIR__ . '/modules/Example/routes.php')

//->includeFile(__DIR__ . '/modules/Example/routes/blog.php')

//->includeFile(__DIR__ . '/modules/Example/routes/shop.php')

->includeFile(__DIR__ . '/modules/Example/routes/user.php')


// ->page404('/404.html')


->list('/microroutes')
;# $Router ....................................................................
// \d::d($this);