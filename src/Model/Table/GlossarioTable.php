<?php
namespace App\Model\Table;

use App\Model\Entity\Glossario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Glossario Model
 *
 */
class GlossarioTable extends Table
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

        $this->table('glossario');
        $this->displayField('id_palavra1');
        $this->primaryKey(['id_palavra1', 'id_palavra2']);

        $this->belongsTo('Palavra1', [
                        'foreignKey' => 'id_palavra1',
                        'bindingKey' => 'id_palavra',
                        'className' => 'Palavra'
        ]);

        $this->belongsTo('Palavra2', [
                        'foreignKey' => 'id_palavra2',
                        'bindingKey' => 'id_palavra',
                        'className' => 'Palavra'
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
            ->add('id_palavra1', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_palavra1', 'create');

        $validator
            ->add('id_palavra2', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id_palavra2', 'create');

        return $validator;
    }
}
