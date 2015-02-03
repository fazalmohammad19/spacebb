<?php
namespace App\Model\Table;

use App\Model\Entity\ExtensionTable;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ExtensionTables Model
 */
class ExtensionTablesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('extension_tables');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('ExtensionFields', [
            'foreignKey' => 'extension_table_id',
            'dependent' => true
        ]);
        $this->hasMany('ExtensionRows', [
            'foreignKey' => 'extension_table_id'
        ]);

        $this->addBehavior('CreateTable');
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
            ->add('name', [
                'unique' => ['rule' => 'validateUnique', 'provider' => 'table', 'message' => __('Table already exist'),]
            ])
            ->allowEmpty('ext_for');

        return $validator;
    }
}
