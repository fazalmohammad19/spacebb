<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataDatetimes Controller
 *
 * @property \App\Model\Table\DataDatetimesTable $DataDatetimes
 */
class DataDatetimesController extends AppController
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
        $this->set('dataDatetimes', $this->paginate($this->DataDatetimes));
        $this->set('_serialize', ['dataDatetimes']);
    }

    /**
     * View method
     *
     * @param string|null $id Data Datetime id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataDatetime = $this->DataDatetimes->get($id, [
            'contain' => ['ExtensionFields', 'ExtensionRows']
        ]);
        $this->set('dataDatetime', $dataDatetime);
        $this->set('_serialize', ['dataDatetime']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataDatetime = $this->DataDatetimes->newEntity();
        if ($this->request->is('post')) {
            $dataDatetime = $this->DataDatetimes->patchEntity($dataDatetime, $this->request->data);
            if ($this->DataDatetimes->save($dataDatetime)) {
                $this->Flash->success('The data datetime has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data datetime could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataDatetimes->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataDatetimes->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataDatetime', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataDatetime']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Datetime id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataDatetime = $this->DataDatetimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataDatetime = $this->DataDatetimes->patchEntity($dataDatetime, $this->request->data);
            if ($this->DataDatetimes->save($dataDatetime)) {
                $this->Flash->success('The data datetime has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The data datetime could not be saved. Please, try again.');
            }
        }
        $extensionFields = $this->DataDatetimes->ExtensionFields->find('list', ['limit' => 200]);
        $extensionRows = $this->DataDatetimes->ExtensionRows->find('list', ['limit' => 200]);
        $this->set(compact('dataDatetime', 'extensionFields', 'extensionRows'));
        $this->set('_serialize', ['dataDatetime']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Datetime id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataDatetime = $this->DataDatetimes->get($id);
        if ($this->DataDatetimes->delete($dataDatetime)) {
            $this->Flash->success('The data datetime has been deleted.');
        } else {
            $this->Flash->error('The data datetime could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
