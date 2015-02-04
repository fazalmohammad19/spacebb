<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Utility\Hash;
use Cake\Core\Exception\Exception;
use PHPSQL\Parser;


class SpaceTableBehavior extends Behavior
{
    /*
     * column type to model(table) mapping array
     * */
    private $ctypeToTableMap = array('varchar' => 'DataVarchars', 'int' => 'DataInts', 'text' => 'DataTexts', 'datetime' => 'DataDatetimes', 'float' => 'DataFloats');

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
    public function space_create($table_name = null, $ext_for = null, $table_column = array())
    {
        $table_column = Hash::insert($table_column, '{n}.extension_table_id', 1);
        $data = [
            'name' => $table_name,
            'ext_for' => $ext_for,
            'extension_fields' => $table_column

        ];

        $entity = $this->_table->newEntity($data);
//      $entity->dirty('extension_fields', true);
        $error = $entity->errors();

        if (!$error) {
            $this->_table->save($entity);
        } else {
            echo $error['name']['unique'];

        }


    }

    private function _getColumnInfo($table)
    {
        $tableInfo = $this->_table->find('all')
            ->where(["ExtensionTables.name like '$table'"])
            ->hydrate(false)
            ->contain(['ExtensionFields'])
            ->toArray();
        $columnsInfo = Hash::combine($tableInfo, '{n}.extension_fields.{n}.field', '{n}.extension_fields.{n}');
        return $columnsInfo;
    }

    private function _getRequiredModel($tableName,$queryColumns)
    {
        $neededDataModels=array();
        $columnsInfo = $this->_getColumnInfo($tableName);
        pr($columnsInfo);
        foreach($queryColumns as $each)
        {
            $each=str_replace('"', "", $each); $each=str_replace("'", "", $each);
            $neededDataModels[$each]['type']=$this->ctypeToTableMap[$columnsInfo[$each]['type']];
            $neededDataModels[$each]['id']=$columnsInfo[$each]['id'];
            $neededDataModels[$each]['extension_table_id']=$columnsInfo[$each]['extension_table_id'];
        }
        return $neededDataModels;
    }

    private function _insert($parsedArr = array())
    {
        $tableName = Hash::extract($parsedArr, '{s}.{n}.table')[0];
        $queryColumns = Hash::extract($parsedArr, '{s}.{n}.columns.{n}.base_expr');

        $neededDataModels = $this->_getRequiredModel($tableName,$queryColumns);

/*@todo: process values of query  use following statement to save
$Info = $this->_table->ExtensionRows->find('all')
            ->hydrate(false)
            ->toArray();
        pr($Info);

 * */
        pr($neededDataModels);

    }

    public function space_query($sql)
    {
        pr($sql);
        $parser = new Parser($sql, true);
        $keys = array_keys($parser->parsed);

        //pr(array_values($parser->parsed));
        //  pr($parser->parsed);

        switch ($keys[0]) {
            case 'INSERT':
                $this->_insert($parser->parsed);
                break;
            case 1:
                echo "i equals 1";
                break;
            case 2:
                echo "i equals 2";
                break;
        }


    }


}