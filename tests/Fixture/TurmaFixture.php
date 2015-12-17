<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TurmaFixture
 *
 */
class TurmaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'turma';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_turma' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_disciplina' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_professor' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'semestre' => ['type' => 'string', 'fixed' => true, 'length' => 6, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'ano' => ['type' => 'string', 'fixed' => true, 'length' => 4, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_disciplina' => ['type' => 'index', 'columns' => ['id_disciplina'], 'length' => []],
            'id_professor' => ['type' => 'index', 'columns' => ['id_professor'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_turma'], 'length' => []],
            'turma_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_disciplina'], 'references' => ['disciplina', 'id_disciplina'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'turma_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_professor'], 'references' => ['professor', 'id_professor'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_turma' => 1,
            'id_disciplina' => 1,
            'id_professor' => 1,
            'semestre' => 'Lore',
            'ano' => 'Lo'
        ],
    ];
}
