<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AlunoController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AlunoController Test Case
 */
class AlunoControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.aluno',
        'app.turma',
        'app.aluno_turma',
        'app.disciplina',
        'app.professor',
        'app.palavra',
        'app.idioma',
        'app.idioma_palavra',
        'app.idioma2'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
