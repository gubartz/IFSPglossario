<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GlossarioFixture
 *
 */
class GlossarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'glossario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_palavra1' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_palavra2' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_palavra2' => ['type' => 'index', 'columns' => ['id_palavra2'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_palavra1', 'id_palavra2'], 'length' => []],
            'glossario_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_palavra1'], 'references' => ['palavra', 'id_palavra'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'glossario_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_palavra2'], 'references' => ['palavra', 'id_palavra'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'id_palavra1' => 1,
            'id_palavra2' => 1
        ],
    ];
}
