<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AlunoTurmaFixture
 *
 */
class AlunoTurmaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'aluno_turma';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_aluno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_turma' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_turma' => ['type' => 'index', 'columns' => ['id_turma'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_aluno', 'id_turma'], 'length' => []],
            'aluno_turma_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_aluno'], 'references' => ['aluno', 'id_aluno'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'aluno_turma_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_turma'], 'references' => ['turma', 'id_turma'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_aluno' => 1,
            'id_turma' => 1
        ],
    ];
}
