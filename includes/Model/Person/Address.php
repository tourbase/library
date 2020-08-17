<?php

namespace Tourbase\Model\Person;

use Tourbase\Model;

/**
 * Class Address
 * @property int $personid
 * @property int $id
 * @property string $type
 * @property bool $isprimary
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $postalcode
 * @property int $countryid
 * @property bool $subscribetomaillist
 * @property string $createdon
 * @property string $modifiedon
 * @property \Tourbase\Model\Country $country
 */
class Address extends Model
{
	public static function getApiPath() {
		// currently does not have a direct api call
		// just accessed as a subobject of persons
		return null;
	}

	public function __construct() {
		parent::__construct();

		$this->_addSingleReference('country', 'Tourbase\Model\Country', array('countryid'=>'id'));
	}
}
