<?php
namespace App\Model\Table;

use App\Model\Entity\ExtensionField;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExtensionFields Model
 */
class ExtensionFieldsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('extension_fields');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('ExtensionTables', [
            'foreignKey' => 'extension_table_id'
        ]);
        $this->hasMany('DataDatetimes', [
            'foreignKey' => 'extension_field_id'
        ]);
        $this->hasMany('DataFloats', [
            'foreignKey' => 'extension_field_id'
        ]);
        $this->hasMany('DataInts', [
            'foreignKey' => 'extension_field_id'
        ]);
        $this->hasMany('DataTexts', [
            'foreignKey' => 'extension_field_id'
        ]);
        $this->hasMany('DataVarchars', [
            'foreignKey' => 'extension_field_id'
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
            ->add('extension_table_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('extension_table_id', 'create')
            ->notEmpty('extension_table_id')
            ->allowEmpty('field')
            ->allowEmpty('type')
            ->add('last_row', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('last_row');

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
        $rules->add($rules->existsIn(['extension_table_id'], 'ExtensionTables'));
        return $rules;
    }
}
