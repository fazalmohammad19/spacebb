<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataFloats Controller
 *
 * @property \App\Model\Table\DataFloatsTable $DataFloats
 */
class DataFloatsController extends AppController
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
        $this->set('dataFloats', $this->paginate($this->DataFloats));
        $this->set('_serialize', ['dataFloats']);
    }

    /**
     * View method
     *
     * @param string|null $id Data Float id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataFloat = $this->DataFloats->get($id, [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ]);
        $this->set('dataFloat', $dataFloat);
        $this->set('_serialize', ['dataFloat']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataFloat = $this->DataFloats->newEntity();
        if ($this->request->is('post')) {
            $dataFloat = $this->DataFloats->patchEntity($dataFloat, $this->request->data);
            if ($this->DataFloats->save($dataFloat)) {
                $this->Flash->success('The data float has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data float could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataFloats->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataFloats->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataFloat', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataFloat']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Float id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataFloat = $this->DataFloats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataFloat = $this->DataFloats->patchEntity($dataFloat, $this->request->data);
            if ($this->DataFloats->save($dataFloat)) {
                $this->Flash->success('The data float has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data float could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataFloats->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataFloats->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataFloat', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataFloat']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Float id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataFloat = $this->DataFloats->get($id);
        if ($this->DataFloats->delete($dataFloat)) {
            $this->Flash->success('The data float has been deleted.');
        } else {
            $this->Flash->error('The data float could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
