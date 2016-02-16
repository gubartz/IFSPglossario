<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TurmaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TurmaTable Test Case
 */
class TurmaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TurmaTable
     */
    public $Turma;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.turma',
        'app.aluno',
        'app.aluno_turma',
        'app.palavra',
        'app.idioma',
        'app.glossario',
        'app.palavra1',
        'app.palavra2',
        'app.disciplina',
        'app.professor'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Turma') ? [] : ['className' => 'App\Model\Table\TurmaTable'];
        $this->Turma = TableRegistry::get('Turma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Turma);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
