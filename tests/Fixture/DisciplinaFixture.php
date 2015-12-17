<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DisciplinaFixture
 *
 */
class DisciplinaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'disciplina';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_disciplina' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'sigla' => ['type' => 'string', 'length' => 20, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao' => ['type' => 'string', 'length' => 1000, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_curso' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_curso' => ['type' => 'index', 'columns' => ['id_curso'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_disciplina'], 'length' => []],
            'disciplina_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_curso'], 'references' => ['curso', 'id_curso'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_disciplina' => 1,
            'sigla' => 'Lorem ipsum dolor ',
            'descricao' => 'Lorem ipsum dolor sit amet',
            'id_curso' => 1
        ],
    ];
}
