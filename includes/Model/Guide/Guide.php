<?php

namespace Tourbase\Model\Guide;

use Tourbase\Model;

/**
 * Class Guide
 * @property int $businessgroupid
 * @property int $personid
 * @property int $id
 * @property string $schedulingnotes
 * @property string $createdon
 * @property string $modifiedon
 * @property bool $deleted
 * @property \Tourbase\Model\Person\Person $person
 */
class Guide extends Model
{
	public static function getApiPath() {
		return 'guide';
	}

	public function __construct() {
		parent::__construct();

		$this->_addSingleReference('person', 'Tourbase\Model\Person\Person', array('personid' => 'id'));
	}
}
