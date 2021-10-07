<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles', 'SecurityQuestions'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'SecurityQuestions', 'Organisations'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $securityQuestions = $this->Users->SecurityQuestions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'securityQuestions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $securityQuestions = $this->Users->SecurityQuestions->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles', 'securityQuestions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function questionone()
    {

    }

    public function questionfour()
    {

        
        $number = implode($this->request->data);
        $number = (int)$number;
        //$number = 15;
        $output = array();
        for ($i = 1; $i <= $number; $i++)
            if ($number%$i == 0)
                $output[] = $i;
                $this->set('number',$output);

    }

    public function questionfive()
    {
        $flag = 0;
        $string = implode($this->request->data);
        
        $reverse = strrev($string);
        $this->set('reverse',$reverse);
        

        if($string == $reverse) 
        {
            $this->set('flag',$flag);
            $this->set('string',$string);
        }
        else {
            $flag = 1;
            $this->set('flag',$flag);
            $this->set('string',$string);
        }
    }

    public function questionsix()
    {
        $output = array();
        $array = array(64, 34, 25, 12, 22, 11, 90);
        sort($array);

        $array_length = count($array);

        for ($i=0; $i < $array_length ; $i++) 
        { 
            $output[] = $array[$i];
        }

      
        $this->set('output',$output);
    }

    public function questionseven()
    {
        $output = array();
        $array1 = array("1"=>"11","2"=>"22","3"=>"33","4"=>"44");
        $array2 = array("5"=>"11","6"=>"22","7"=>"33");

        $output=array_diff($array1,$array2);
        $this->set('output',$output);
    }



}
