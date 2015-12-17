<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PalavraFixture
 *
 */
class PalavraFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'palavra';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_palavra' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'texto' => ['type' => 'string', 'length' => 4000, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_idioma' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_aluno' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_turma' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_cadastro' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_idioma' => ['type' => 'index', 'columns' => ['id_idioma'], 'length' => []],
            'id_aluno' => ['type' => 'index', 'columns' => ['id_aluno', 'id_turma'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_palavra'], 'length' => []],
            'palavra_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_idioma'], 'references' => ['idioma', 'id_idioma'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'palavra_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_aluno', 'id_turma'], 'references' => ['aluno_turma', '1' => ['id_aluno', 'id_turma']], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_palavra' => 1,
            'texto' => 'Lorem ipsum dolor sit amet',
            'id_idioma' => 1,
            'id_aluno' => 1,
            'id_turma' => 1,
            'data_cadastro' => '2015-09-23 21:44:46'
        ],
    ];
}
