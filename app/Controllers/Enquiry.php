<?php

namespace App\Controllers;
use App\Models\CommonModel;

class Enquiry extends BaseController
{
    public function __construct(){
        $this->CommonModel = new CommonModel();
    }

    public function enquiry()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            if ($this->CommonModel->insertData('enquiry', $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success text-center">New Enquiry Added</div>');
                return redirect()->to('manage-enquiry');
                echo 'done';
            }
        }
        $data['users'] = $this->CommonModel->getData('tbl_user');

        $data['properties'] = $this->CommonModel->getData('add_property');

        return view('admin/enquiry', $data);
    }

    public function manage_enquiry()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        $data['enquires'] = $this->CommonModel->getData('enquiry');
        return view('admin/manage-enquiry', $data);
    }

    public function update_enquiry($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if($this->request->getPost()){
            $dataArray = $this->request->getPost();

            if ($this->CommonModel->updateData('enquiry', 'enquiry_id', $id, $dataArray)) {
                return redirect()->to('manage-enquiry');
            }
        }

        $data['enquiry'] = $this->CommonModel->getDatawhere('enquiry', 'enquiry_id', $id);
        $data['properties'] = $this->CommonModel->getData('add_property');

        return view('admin/update-enquiry', $data);

    }

    public function delete_enquiry($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }
        if($this->CommonModel->deleteData('enquiry', 'enquiry_id', $id)){
            $session->setFlashdata('message', '<div class="alert alert-success text-center">Deleted Successfully</div>');
            return redirect()->to('manage-enquiry');           

        }
    }
}
