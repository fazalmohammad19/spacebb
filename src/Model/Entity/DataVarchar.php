<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DataVarchar Entity.
 */
class DataVarchar extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'value' => true,
        'extension_field_id' => true,
        'extension_row_id' => true,
        'extension_field' => true,
        'extension_row' => true,
    ];
}
