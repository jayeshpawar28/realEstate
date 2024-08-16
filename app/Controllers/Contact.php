<?php

namespace App\Controllers;
use App\Models\CommonModel;

class Contact extends BaseController
{
    public function __construct()
    {
        $this->CommonModel = new CommonModel();
    }

    public function add_contact()
    {

        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            if ($this->CommonModel->insertData('contact', $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success text-center">Contact Added Successfully</div>');
                echo "insert successfully";
                return redirect()->to('manage-contact');
            }
           
        }
        return view('admin/add-contact');
    }

    public function manage_contact()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        $data['contacts'] = $this->CommonModel->getData('contact');
        return view('admin/manage-contact', $data);
    }

    public function update_contact($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if($this->request->getPost()){
            $dataArray = $this->request->getPost();

            if($this->CommonModel->updateData('contact', 'user_id', $id, $dataArray)){
                $session->setFlashdata('message', '<div class="alert alert-success text-center">Contact Updated Successfully</div>');

                return redirect()->to('manage-contact');
            }
        }
        $data['contact'] = $this->CommonModel->getDatawhere('contact', 'user_id', $id);
        return view('admin/update-contact', $data);
    }

    public function delete_contact($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }
        
        if($this->CommonModel->deleteData('contact', 'user_id', $id)){
            $session->setFlashdata('message', '<div class="alert alert-success text-center">Contact Deleted Successfully</div>');
            return redirect()->to('manage-contact');
        }

    }
   
}