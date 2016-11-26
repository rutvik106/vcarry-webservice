<?php

//ALL INCLUDE FILES GOES HERE/////////////////////////

require_once("../lib/xyz.php");



//MAIN SWITCH CASE GOES HERE USE METHOD GET or POST (Currently using GET)

switch ($_GET["method"])
{

	case 'get_trips_by_driver_id':

		//If following method is taking any arguments as parameters please mention it
		//you can fetch arguments using $_GET['whatever_parameter_name']
		echo json_encode(whateverFunction($_GET["driver_id"]));

		break;

	
	case: 'get_trip_details_by_trip_id'

		//If following method is taking any arguments as parameters please mention it
		//you can fetch arguments using $_GET['whatever_parameter_name']
		echo json_encode(whateverFunction($_GET["trip_id"]));

		break;

	default:

		echo("Welcome to V-Carry webservice");

}