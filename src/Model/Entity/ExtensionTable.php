<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ExtensionTable Entity.
 */
class ExtensionTable extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'ext_for' => true,
        'extension_fields' => true,
        'extension_rows' => true,
    ];
}
