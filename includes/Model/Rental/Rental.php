<?php

namespace Tourbase\Model\Rental;

use Tourbase\Model;

/**
 * @class Rental
 * @property int $activityid
 * @property string $registrationupdatedon
 * @property bool $registrationcomplete
 * @property bool $deleted
 * @property \Tourbase\Model\Activity\Activity $activity
 * @property RentalInclude[] $includes
 */
class Rental extends Model
{
	public static function getApiPath() {
		return 'rental';
	}

	public function __construct() {
		parent::__construct();

		$this->_addSingleReference('activity', '\Tourbase\Model\Activity\Activity', array('activityid' => 'id'));
		$this->_addMultipleReference('includes', __NAMESPACE__ . '\RentalInclude', 'include');
	}
}
