<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Topics Controller
 *
 * @property \App\Model\Table\TopicsTable $Topics
 */
class TopicsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('topics', $this->paginate($this->Topics));
        $this->set('_serialize', ['topics']);
    }

    /**
     * View method
     *
     * @param string|null $id Topic id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $topic = $this->Topics->get($id, [
            'contain' => []
        ]);
        $this->set('topic', $topic);
        $this->set('_serialize', ['topic']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $topic = $this->Topics->newEntity();
        if ($this->request->is('post')) {
            $topic = $this->Topics->patchEntity($topic, $this->request->data);
            if ($this->Topics->save($topic)) {
                $this->Flash->success('The topic has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The topic could not be saved. Please, try again.');
            }
        }
        $this->set(compact('topic'));
        $this->set('_serialize', ['topic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Topic id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $topic = $this->Topics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $topic = $this->Topics->patchEntity($topic, $this->request->data);
            if ($this->Topics->save($topic)) {
                $this->Flash->success('The topic has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The topic could not be saved. Please, try again.');
            }
        }
        $this->set(compact('topic'));
        $this->set('_serialize', ['topic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Topic id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $topic = $this->Topics->get($id);
        if ($this->Topics->delete($topic)) {
            $this->Flash->success('The topic has been deleted.');
        } else {
            $this->Flash->error('The topic could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
