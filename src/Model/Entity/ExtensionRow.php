<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtensionRow Entity.
 */
class ExtensionRow extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'extension_table_id' => true,
        'extension_table' => true,
        'data_datetimes' => true,
        'data_floats' => true,
        'data_ints' => true,
        'data_texts' => true,
        'data_varchars' => true,
    ];
}
