<?php 

/**
 *  @author Sylvain Fabre
 */
class AssoConnectLibphoneDOMTOMTest extends PHPUnit_Framework_TestCase{

	/**
	 * @covers AssoConnect\LibphoneDOMTOM::parse()
	 * @dataProvider provider_parse
	 */
	public function test_parse(){

	}
	public function provider_parse(){
		return array(
			// General French number
			array('+33123456789',	'+33123456789'),
			// US number
			array('+12129634475',	'+12129634475'),
			// RE - La Réunion
			array('+33692001234',	'+262692001234'),
			// YT - Mayotte
			array('+33269641234',	'+262269641234'),
			// PM - Saint Pierre and Miquelon
			array('+33508400000',	'+508400000'),
			// GP - Guadeloupe
			// BL - Saint-Barthélemy
			// MF - Saint Martin
			array('+33690001234',	'+590690001234'),
			// GF - Guyane
			array('+33694001234',	'+594694001234'),
			// MQ - Martinique
			array('+33596461234',	'+596596461234')
		);
	}

}