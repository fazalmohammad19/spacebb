<?php
namespace App\Model\Table;

use App\Model\Entity\DataInt;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DataInts Model
 */
class DataIntsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('data_ints');
        $this->displayField('id');
        $this->primaryKey(['id', 'extension_data_id']);
        $this->belongsTo('ExtensionFields', [
            'foreignKey' => 'extension_field_id'
        ]);
        $this->belongsTo('ExtensionRows', [
            'foreignKey' => 'extension_row_id'
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
            ->allowEmpty('id', 'create')
            ->add('value', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('value')
            ->add('extension_field_id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('extension_field_id', 'create')
            ->allowEmpty('extension_row_id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['extension_field_id'], 'ExtensionFields'));
        $rules->add($rules->existsIn(['extension_row_id'], 'ExtensionRows'));
        return $rules;
    }
}
