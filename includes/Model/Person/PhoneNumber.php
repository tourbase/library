<?php

namespace Tourbase\Model\Person;

use Tourbase\Model;

/**
 * Class PhoneNumber
 * @property int $personid
 * @property int $id
 * @property string $type
 * @property bool $isprimary
 * @property int $countryid
 * @property string $phonenumber
 * @property string $createdon
 * @property string $modifiedon
 * @property \Tourbase\Model\Country $country
 */
class PhoneNumber extends Model
{
	public static function getApiPath() {
		// currently does not have a direct api call
		// just accessed as a subobject of persons
		return null;
	}

	public function __construct() {
		parent::__construct();

		$this->_addSingleReference('country', 'Tourbase\Model\Country', array( 'countryid' => 'id' ) );
	}
}
