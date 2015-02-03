<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtensionData Entity.
 */
class ExtensionData extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'extension_field_id' => true,
        'value_int' => true,
        'value_varchar' => true,
        'value_text' => true,
        'value_datetime' => true,
        'value_float' => true,
        'extension_field' => true,
        'data_datetimes' => true,
        'data_floats' => true,
        'data_ints' => true,
        'data_texts' => true,
        'data_varchars' => true,
    ];
}
