<?php

require __DIR__ . '/vendor/autoload.php';
use \Curl\Curl;

/**
 * cachet aPI handler
 */
class CachetHandler
{

	private $base_url = 'https://demo.cachethq.io';
	private $apiKey   = '9yMHsdioQosnyVK4iCVR';
	private $curl     = null;

	function __construct() {

		$this->curl = new Curl();
		$this->curl->setHeader( 'X-Cachet-Token', $this->apiKey );

	}

	public function addMetric( $id = 1, $value = 1, $timestamp = null ) {

		$timestamp = $timestamp ? $timestamp : time();
		$this->curl->post(  $this->base_url . '/api/v1/metrics/' . $id . '/points' , [
			'value'     => $value,
			'timestamp' => $timestamp,
		]);

	}

	public function __get( $property ) {

		if (property_exists($this, $property)) {
			return $this->$property;
		}
		return false;

	}

	public function __set( $property, $value ) {

		if (property_exists($this, $property)) {
			$this->$property = $value;
			return true;
		}
		return false;

	}
}