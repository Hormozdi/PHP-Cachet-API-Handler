<?php

require __DIR__ . '/cachetHandler.php';


$cachet = new CachetHandler();

// set base url. replace with your cachet script url
$cachet->__set( 'base_url', 'https://demo.cachethq.io' );

// you can select your key from cachet admin panel
$cachet->__set( 'apiKey'  , '9yMHsdioQosnyVK4iCVR'     );

/*
 *add metric value to metrics
 *param1: id of metric
 *param2: value of object
 *param3: time of adding object
 */
$cachet->addMetric( 1, 100, time() );