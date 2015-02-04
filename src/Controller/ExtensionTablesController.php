<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Utility\Hash;
/**
 * ExtensionTables Controller
 *
 * @property \App\Model\Table\ExtensionTablesTable $ExtensionTables
 */
class ExtensionTablesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('extensionTables', $this->paginate($this->ExtensionTables));
        $this->set('_serialize', ['extensionTables']);
    }

    /**
     * View method
     *
     * @param string|null $id Extension Table id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extensionTable = $this->ExtensionTables->get($id, [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ]);
        $this->set('extensionTable', $extensionTable);
        $this->set('_serialize', ['extensionTable']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extensionTable = $this->ExtensionTables->newEntity();
        if ($this->request->is('post')) {
            $extensionTable = $this->ExtensionTables->patchEntity($extensionTable, $this->request->data);
            if ($this->ExtensionTables->save($extensionTable)) {
                $this->Flash->success('The extension table has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension table could not be saved. Please, try again.');
            }
        }
        $this->set(compact('extensionTable'));
        $this->set('_serialize', ['extensionTable']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Extension Table id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extensionTable = $this->ExtensionTables->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extensionTable = $this->ExtensionTables->patchEntity($extensionTable, $this->request->data);
            if ($this->ExtensionTables->save($extensionTable)) {
                $this->Flash->success('The extension table has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The extension table could not be saved. Please, try again.');
            }
        }
        $this->set(compact('extensionTable'));
        $this->set('_serialize', ['extensionTable']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Extension Table id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extensionTable = $this->ExtensionTables->get($id);
        if ($this->ExtensionTables->delete($extensionTable)) {
            $this->Flash->success('The extension table has been deleted.');
        } else {
            $this->Flash->error('The extension table could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

    public function test()
    {


     /*   $query = $this->ExtensionTables->find('all');
        $query->hydrate(false);
        $query->contain(['ExtensionFields.DataVarchars.ExtensionRows', 'ExtensionRows']);
        $data = $query->toArray();*/
    //   pr($data);
        /*$data = [
            'name' => 'uuuu',
            'ext_for' => 'boards',
            'extension_fields' => [

                 ['extension_table_id' => 1,'field' => 'field2','type' => 'varchar'],
                 ['extension_table_id' => 1,'field' => 'admin_email','type' => 'datetime'],

            ]

        ];

        $entity =$this->ExtensionTables->newEntity($data);


       debug($entity);
        $this->ExtensionTables->save($entity);
        debug($entity);*/
        //$this->ExtensionTables->create_space()->create_field();
       /* $table_col[]=array('extension_table_id' => 1,'field'=>'abc','type'=>'int');
        $table_col[]=array('extension_table_id' => 1,'field'=>'rter','type'=>'varchar');*/

        $table_col[]=array('field'=>'title','type'=>'varchar');
        $table_col[]=array('field'=>'body','type'=>'text');
        $table_col[]=array('field'=>'created','type'=>'datetime');
        $table_col[]=array('field'=>'modified','type'=>'datetime');
       // pr($table_col);



       // $this->ExtensionTables->space_create('articles','forums',$table_col);
        //INSERT INTO `space`.`extension_rows` (`id`, `extension_table_id`, `created`) VALUES (NULL, '1', '2015-02-02 00:00:00');
        $sql="insert   INTO articles ('title','body', 'created', 'modified') VALUES ('This is title', 'This is body This is body This is body', '2015-02-01 00:00:00', '2015-02-02 00:00:00')";


        $this->ExtensionTables->space_query($sql);
        //exit;
    }
}
