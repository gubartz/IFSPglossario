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
 * @property \Cake\ORM\Association\BelongsToMany $Aluno */
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
            'className' => 'Aluno',
            'targetForeignKey' => 'id_turma',
            'joinTable' => 'aluno_turma',
            'foreignKey' => 'id_turma'
        ]);

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
            ->add('id_turma', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_turma', 'create');
        $validator
            ->add('id_disciplina', 'valid', ['rule' => 'numeric'])            ->requirePresence('id_disciplina', 'create')            ->notEmpty('id_disciplina');
        $validator
            ->add('id_professor', 'valid', ['rule' => 'numeric'])            ->requirePresence('id_professor', 'create')            ->notEmpty('id_professor');
        $validator
            ->allowEmpty('semestre');
        $validator
            ->allowEmpty('ano');
        return $validator;
    }
}
