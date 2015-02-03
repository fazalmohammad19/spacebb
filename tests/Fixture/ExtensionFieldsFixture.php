<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ExtensionFieldsFixture
 *
 */
class ExtensionFieldsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'This table is a container of database table filed information', 'autoIncrement' => true, 'precision' => null],
        'extension_table_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'field' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'type' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'What type of data it will store', 'precision' => null],
        'last_row' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'keep the record of last data id of this field', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_extension_fields_extension_tables1_idx' => ['type' => 'index', 'columns' => ['extension_table_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_extension_fields_extension_tables1' => ['type' => 'foreign', 'columns' => ['extension_table_id'], 'references' => ['extension_tables', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'id' => 1,
            'extension_table_id' => 1,
            'field' => 'Lorem ipsum dolor sit amet',
            'type' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'last_row' => 1
        ],
    ];
}
