<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DataDatetimesFixture
 *
 */
class DataDatetimesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'value' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'extension_field_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'extension_row_id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_data_datetime_extension_field1_idx' => ['type' => 'index', 'columns' => ['extension_field_id'], 'length' => []],
            'fk_data_datetimes_extension_rows1_idx' => ['type' => 'index', 'columns' => ['extension_row_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'extension_field_id', 'extension_row_id'], 'length' => []],
            'fk_data_datetime_extension_field1' => ['type' => 'foreign', 'columns' => ['extension_field_id'], 'references' => ['extension_fields', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_data_datetimes_extension_rows1' => ['type' => 'foreign', 'columns' => ['extension_row_id'], 'references' => ['extension_rows', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => '',
            'value' => '2015-01-31 15:31:32',
            'extension_field_id' => 1,
            'extension_row_id' => ''
        ],
    ];
}
