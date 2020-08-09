<?php

namespace Tourbase\Model\Reservation;

use Tourbase\Model;

/**
 * @class Reservation
 * @property int $activityid
 * @property int $tripid
 * @property array $allocations
 * @property array $components
 * @property int $groupguests
 * @property string|null $registrationupdatedon
 * @property bool $registrationcomplete
 * @property bool $deleted
 * @property \Tourbase\Model\Activity\Activity $activity
 * @property \Tourbase\Model\Trip\Trip $trip
 * @property ReservationMember[] $members
 */
class Reservation extends Model
{
	public static function getApiPath() {
		return 'reservation';
	}

	public function __construct() {
		parent::__construct();

		$this->_addSingleReference('activity', '\Tourbase\Model\Activity\Activity', array('activityid' => 'id'));
		$this->_addSingleReference('trip', '\Tourbase\Model\Trip\Trip', array('tripid' => 'id'));
		$this->_addMultipleReference('members', __NAMESPACE__ . '\ReservationMember', 'member');
	}
}
