<?php
namespace App\Model\Table;

use App\Model\Entity\Turma;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turma Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Aluno
 */
class TurmaTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('turma');
        $this->displayField('id_turma');
        $this->primaryKey('id_turma');

        $this->belongsToMany('Aluno', [
            'foreignKey' => 'id_turma',
            'targetForeignKey' => 'id_aluno',
            'joinTable' => 'aluno_turma',
            'through' => 'AlunoTurma'
        ]);

        $this->belongsTo('Disciplina', ['foreignKey' => 'id_disciplina']);

        $this->belongsTo('Professor', ['foreignKey' => 'id_professor']);        
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id_turma')
            ->allowEmpty('id_turma', 'create');

        $validator
            ->integer('id_disciplina')
            ->requirePresence('id_disciplina', 'create')
            ->notEmpty('id_disciplina');

        $validator
            ->integer('id_professor')
            ->requirePresence('id_professor', 'create')
            ->notEmpty('id_professor');

        $validator
            ->allowEmpty('semestre');

        $validator
            ->allowEmpty('ano');

        return $validator;
    }
}
