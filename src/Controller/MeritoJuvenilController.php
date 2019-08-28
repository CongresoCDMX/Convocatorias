<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MeritoJuvenil Controller
 *
 * @property \App\Model\Table\MeritoJuvenilTable $MeritoJuvenil
 *
 * @method \App\Model\Entity\MeritoJuvenil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MeritoJuvenilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $meritoJuvenil = $this->paginate($this->MeritoJuvenil);

        $this->set(compact('meritoJuvenil'));
    }

    /**
     * View method
     *
     * @param string|null $id Merito Juvenil id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meritoJuvenil = $this->MeritoJuvenil->get($id, [
            'contain' => []
        ]);

        $this->set('meritoJuvenil', $meritoJuvenil);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id = null)
    {
        $meritoJuvenil = $this->MeritoJuvenil->newEntity();
        if ($this->request->is('post')) {
            $meritoJuvenil = $this->MeritoJuvenil->patchEntity($meritoJuvenil, $this->request->getData());
            if ($this->MeritoJuvenil->save($meritoJuvenil)) {
                $this->Flash->success(__('Gracias, tu registro fue enviado!'));

                return $this->redirect(['action' => 'edit/'. $meritoJuvenil->id]);
            }
            $this->Flash->error(__('Intente nuevamente!'));
        }
        $this->set(compact('meritoJuvenil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Merito Juvenil id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meritoJuvenil = $this->MeritoJuvenil->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meritoJuvenil = $this->MeritoJuvenil->patchEntity($meritoJuvenil, $this->request->getData());
            if ($this->MeritoJuvenil->save($meritoJuvenil)) {
                $this->Flash->success(__('The merito juvenil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The merito juvenil could not be saved. Please, try again.'));
        }
        $this->set(compact('meritoJuvenil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Merito Juvenil id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meritoJuvenil = $this->MeritoJuvenil->get($id);
        if ($this->MeritoJuvenil->delete($meritoJuvenil)) {
            $this->Flash->success(__('The merito juvenil has been deleted.'));
        } else {
            $this->Flash->error(__('The merito juvenil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
