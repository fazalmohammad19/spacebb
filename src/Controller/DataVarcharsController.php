<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataVarchars Controller
 *
 * @property \App\Model\Table\DataVarcharsTable $DataVarchars
 */
class DataVarcharsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ];
        $this->set('dataVarchars', $this->paginate($this->DataVarchars));
        $this->set('_serialize', ['dataVarchars']);
    }

    /**
     * View method
     *
     * @param string|null $id Data Varchar id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataVarchar = $this->DataVarchars->get($id, [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ]);
        $this->set('dataVarchar', $dataVarchar);
        $this->set('_serialize', ['dataVarchar']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataVarchar = $this->DataVarchars->newEntity();
        if ($this->request->is('post')) {
            $dataVarchar = $this->DataVarchars->patchEntity($dataVarchar, $this->request->data);
            if ($this->DataVarchars->save($dataVarchar)) {
                $this->Flash->success('The data varchar has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data varchar could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataVarchars->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataVarchars->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataVarchar', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataVarchar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Varchar id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataVarchar = $this->DataVarchars->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataVarchar = $this->DataVarchars->patchEntity($dataVarchar, $this->request->data);
            if ($this->DataVarchars->save($dataVarchar)) {
                $this->Flash->success('The data varchar has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data varchar could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataVarchars->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataVarchars->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataVarchar', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataVarchar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Varchar id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataVarchar = $this->DataVarchars->get($id);
        if ($this->DataVarchars->delete($dataVarchar)) {
            $this->Flash->success('The data varchar has been deleted.');
        } else {
            $this->Flash->error('The data varchar could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }

    public function test()
    {

        $query = $this->DataVarchars->find('all');
        $query->hydrate(false);
        $query->contain(['ExtensionFields', 'ExtensionRows']);
        $data = $query->toArray();
        pr($data);
        exit;
    }
}
