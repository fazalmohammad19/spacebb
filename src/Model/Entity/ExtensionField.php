<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtensionField Entity.
 */
class ExtensionField extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'extension_table_id' => true,
        'field' => true,
        'type' => true,
        'last_row' => true,
        'extension_table' => true,
        'data_datetimes' => true,
        'data_floats' => true,
        'data_ints' => true,
        'data_texts' => true,
        'data_varchars' => true,
    ];
}
