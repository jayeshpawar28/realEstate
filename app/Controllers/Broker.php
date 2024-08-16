<?php

namespace App\Controllers;

use App\Models\CommonModel;

class Broker extends BaseController
{
    
    public function __construct()
    {
        $this->CommonModel = new CommonModel();

        $session = \Config\Services::session();

    }

    public function add()
    {
        
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $img = $this->request->getFile('photo');

            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo' => $newName];

            if ($this->CommonModel->insertData('add_broker', $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success text-center">Broker Added Successfully</div>');
                return redirect()->to('manage-broker');           
             }
        }
        return view('admin/add-broker');
    }

    public function manage()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        $data['brokers'] = $this->CommonModel->getData('add_broker');
        return view('admin/manage-broker', $data);
    }

    public function edit($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $img = $this->request->getFile('photo');

            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'uploads', $newName);
            }else {
                $newName = $this->request->getPost('oldphoto');
            }

            $dataArray += ['photo' => $newName];
            unset($dataArray['oldphoto']);

            if ($this->CommonModel->updateData('add_broker', 'broker_id', $id, $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success text-center">Updated Successfully</div>');
                return redirect()->to('manage-broker');  
            }
        }
        $data['broker'] = $this->CommonModel->getDatawhere('add_broker', 'broker_id', $id);
        return view('admin/update-broker', $data);
    }

    public function delete($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }
        
        $session = session();

        if($this->CommonModel->deleteData('add_broker', 'broker_id', $id)){
            $session->setFlashdata('message', '<div class="alert alert-success text-center">Deleted Successfully</div>');
            return redirect()->to('manage-broker');           

        }
    }
}