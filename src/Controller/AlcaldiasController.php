<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alcaldias Controller
 *
 * @property \App\Model\Table\AlcaldiasTable $Alcaldias
 *
 * @method \App\Model\Entity\Alcaldia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlcaldiasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $alcaldias = $this->paginate($this->Alcaldias);

        $this->set(compact('alcaldias'));
    }

    /**
     * View method
     *
     * @param string|null $id Alcaldia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alcaldia = $this->Alcaldias->get($id, [
            'contain' => []
        ]);

        $this->set('alcaldia', $alcaldia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alcaldia = $this->Alcaldias->newEntity();
        if ($this->request->is('post')) {
            $alcaldia = $this->Alcaldias->patchEntity($alcaldia, $this->request->getData());
            if ($this->Alcaldias->save($alcaldia)) {
                $this->Flash->success(__('The alcaldia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alcaldia could not be saved. Please, try again.'));
        }
        $this->set(compact('alcaldia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Alcaldia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alcaldia = $this->Alcaldias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alcaldia = $this->Alcaldias->patchEntity($alcaldia, $this->request->getData());
            if ($this->Alcaldias->save($alcaldia)) {
                $this->Flash->success(__('The alcaldia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alcaldia could not be saved. Please, try again.'));
        }
        $this->set(compact('alcaldia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Alcaldia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alcaldia = $this->Alcaldias->get($id);
        if ($this->Alcaldias->delete($alcaldia)) {
            $this->Flash->success(__('The alcaldia has been deleted.'));
        } else {
            $this->Flash->error(__('The alcaldia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
