<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Glossario Entity.
 *
 * @property int $id_palavra1
 * @property int $id_palavra2
 */
class Glossario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id_palavra1' => false,
        'id_palavra2' => false,
    ];
}
