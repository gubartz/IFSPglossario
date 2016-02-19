<?php
namespace App\Model\Table;

use App\Model\Entity\Idioma;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Idioma Model
 *
 */
class IdiomaTable extends Table
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

        $this->table('idioma');
        $this->displayField('id_idioma');
        $this->primaryKey('id_idioma');

        $this->hasMany('Palavra', [
            'foreignKey' => 'id_idioma',
            'targetForeignKey' => 'id_idioma',
            'className' => 'Palavra'
        ]);

        $this->belongsToMany('Palavra', ['foreignKey' => 'id_idioma']);

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
            ->add('id_idioma', 'valid', ['rule' => 'numeric'])            ->allowEmpty('id_idioma', 'create');
        $validator
            ->requirePresence('descricao', 'create')            ->notEmpty('descricao');
        return $validator;
    }
}
