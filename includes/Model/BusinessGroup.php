<?php

namespace Tourbase\Model;

use Tourbase\Model;

/**
 * Class BusinessGroup
 * @property int $parentbusinessgroupid
 * @property int $id
 * @property string $name
 * @property bool $separateretailinventory
 * @property string $createdon
 * @property string $modifiedon
 */
class BusinessGroup extends Model
{
	public static function getApiPath() {
		return 'businessgroup';
	}

	public function __construct() {
		parent::__construct();
	}
}
