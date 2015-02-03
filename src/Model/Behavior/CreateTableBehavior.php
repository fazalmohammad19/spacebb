<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Hash;
use Cake\Core\Exception\Exception;

class CreateTableBehavior extends Behavior
{

    public function initialize(array $config)
    {
        // Some initialization code here
    }

    /**
     * Create a virtual table
     *
     * Table columns are:
     *
     * - field: column name.
     * - type: data type for column, available data types are int,varchar,float,datetime,text
     * @param string|null $table_name the new table name
     * @param string|null $ext_for for which ext this table will be used
     * @param array $table_column Array of table column as described above
     * @return false on failure
     */
    public function space_create($table_name=null,$ext_for=null,$table_column=array())
    {
        $table_column = Hash::insert($table_column, '{n}.extension_table_id',1);
        $data = [
            'name' => $table_name,
            'ext_for' => $ext_for,
            'extension_fields' => $table_column

        ];

        $entity =$this->_table->newEntity($data);
//      $entity->dirty('extension_fields', true);
        $error=$entity->errors();

        if (!$error) {
            $this->_table->save($entity);
        }else
        {
            echo $error['name']['unique'];

        }



    }

    public function space_insert()
    {

    }


}