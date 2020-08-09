<?php

namespace Tourbase\Model\Store;

use Tourbase\Model;

/**
 * Class ShippingMethod
 * @property int $id
 * @property string $name
 * @property int $deliveryminimumdays
 * @property int $deliverymaximumdays
 * @property bool $allowpostofficeboxes
 * @property string $filtertool
 * @property float $costbase
 * @property float $costperitem
 * @property float $costperweight
 * @property array $taxrates
 * @property int $accountid
 * @property string $createdon
 * @property string $modifiedon
 * @property bool $deleted
 */
class ShippingMethod extends Model
{
    public static function getApiPath() {
        return 'shippingmethod';
    }

    public function __construct() {
        parent::__construct();
    }
}
