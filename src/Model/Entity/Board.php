<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Board Entity.
 */
class Board extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'board_name' => true,
    ];
}
