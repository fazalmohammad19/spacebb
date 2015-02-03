<?php
namespace App\Model\Table;

use App\Model\Entity\ExtensionData;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExtensionData Model
 */
class ExtensionDataTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('extension_data');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('ExtensionFields', [
            'foreignKey' => 'extension_field_id'
        ]);
        $this->hasOne('DataDatetimes', [
            'foreignKey' => 'extension_data_id'
        ]);
        $this->hasOne('DataFloats', [
            'foreignKey' => 'extension_data_id'
        ]);
        $this->hasOne('DataInts', [
            'foreignKey' => 'extension_data_id'
        ]);
        $this->hasOne('DataTexts', [
            'foreignKey' => 'extension_data_id'
        ]);
        $this->hasOne('DataVarchars', [
            'foreignKey' => 'extension_data_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('extension_field_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('extension_field_id', 'create')
            ->notEmpty('extension_field_id')
            ->add('value_int', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('value_int')
            ->allowEmpty('value_varchar')
            ->allowEmpty('value_text')
            ->add('value_datetime', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('value_datetime')
            ->add('value_float', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('value_float');

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
        return $rules;
    }
}
