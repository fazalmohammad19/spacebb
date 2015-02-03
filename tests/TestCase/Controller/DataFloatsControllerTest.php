<?php
namespace App\Test\TestCase\Controller;

use App\Controller\DataFloatsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\DataFloatsController Test Case
 */
class DataFloatsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'DataFloats' => 'app.data_floats',
        'ExtensionFields' => 'app.extension_fields',
        'ExtensionTables' => 'app.extension_tables',
        'ExtensionRows' => 'app.extension_rows',
        'DataDatetimes' => 'app.data_datetimes',
        'ExtensionData' => 'app.extension_data',
        'DataInts' => 'app.data_ints',
        'DataTexts' => 'app.data_texts',
        'DataVarchars' => 'app.data_varchars'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
