<?php

require __DIR__ . '/cachetHandler.php';


$cachet = new CachetHandler();

// set base url. replace with your cachet script url
$cachet->__set( 'base_url', 'https://demo.cachethq.io' );

// you can select your key from cachet admin panel
$cachet->__set( 'apiKey'  , '9yMHsdioQosnyVK4iCVR'     );

/*
 *return list of the metric points
 *param1: id of metric
 */
$points = $cachet->getMetricPoints( 1 );
print_r($points);

/*
 *add point to the metric
 *param1: id of metric
 *param2: value of the point
 *param3: time of adding point
 */
$cachet->addMetricPoint( 1, 100, time() );