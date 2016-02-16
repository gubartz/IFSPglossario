<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turma Entity.
 *
 * @property int $id_turma
 * @property int $id_disciplina
 * @property \App\Model\Entity\Disciplina $disciplina
 * @property int $id_professor
 * @property \App\Model\Entity\Professor $professor
 * @property string $semestre
 * @property string $ano
 * @property \App\Model\Entity\Aluno[] $aluno
 */
class Turma extends Entity
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
        'id_turma' => false,
    ];
}
