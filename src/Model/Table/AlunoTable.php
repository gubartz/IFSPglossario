<?php
namespace App\Model\Table;

use App\Model\Entity\Aluno;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aluno Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Turma */
class AlunoTable extends Table
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

        $this->table('aluno');
        $this->displayField('id_aluno');
        $this->primaryKey('id_aluno');

        $this->belongsToMany('Turma', [
            'className' => 'Turma',
            'targetForeignKey' => 'id_turma',
            'joinTable' => 'aluno_turma',
            'foreignKey' => 'id_aluno',
            'through' => 'AlunoTurma'
        ]);

        $this->hasMany('Palavra', [
            'foreignKey'=> 'id_aluno',
            'bindingKey' => 'id_aluno'
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
            ->add('id_aluno', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_aluno', 'create');
        $validator
            ->requirePresence('prontuario', 'create')            ->notEmpty('prontuario');
        $validator
            ->requirePresence('nome', 'create')            ->notEmpty('nome');
        return $validator;
    }
}
