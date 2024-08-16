<?php

namespace App\Controllers;
use App\Models\CommonModel;

class Property extends BaseController
{
    public function __construct(){
        $this->CommonModel = new CommonModel;
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
       
            $img = $this->request->getFile('mainphoto');

            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['mainphoto' => $newName];



            $img1 = $this->request->getFile('photo1');

            if ($img1->isValid() && ! $img1->hasMoved()) {
                $newName = $img1->getRandomName();
                $img1->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo1' => $newName];


            $img2 = $this->request->getFile('photo2');

            if ($img2->isValid() && ! $img2->hasMoved()) {
                $newName = $img2->getRandomName();
                $img2->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo2' => $newName];


            $img3 = $this->request->getFile('photo3');

            if ($img3->isValid() && ! $img3->hasMoved()) {
                $newName = $img3->getRandomName();
                $img3->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo3' => $newName];



            $img4 = $this->request->getFile('photo4');

            if ($img4->isValid() && ! $img4->hasMoved()) {
                $newName = $img4->getRandomName();
                $img4->move(ROOTPATH . 'uploads', $newName);
            }

            $dataArray += ['photo4' => $newName];


            if ($this->CommonModel->insertData('add_property', $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success text-center">Property Added Successfully</div>');
                return redirect()->to('manage-property');
            }
        }

        $data['brokers'] = $this->CommonModel->getData('add_broker');

        return view('admin/add-property', $data);
    }

    public function manage()
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        $data['properties'] = $this->CommonModel->getData('add_property');
        return view('admin/manage-property', $data);
    }

    public function edit($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }

        if ($this->request->getPost()) {
            $dataArray = $this->request->getPost();

            $img = $this->request->getFile('mainphoto');

            if ($img->isValid() && ! $img->hasMoved()) {
                $newName = $img->getRandomName();
                $img->move(ROOTPATH . 'uploads', $newName);
            }else {
                $newName = $this->request->getPost('oldmainphoto');
            }

            $dataArray += ['mainphoto' => $newName];
            unset($dataArray['oldmainphoto']);
            


            $img1 = $this->request->getFile('photo1');

            if ($img1->isValid() && ! $img1->hasMoved()) {
                $newName = $img1->getRandomName();
                $img1->move(ROOTPATH . 'uploads', $newName);
            }else {
                $newName = $this->request->getPost('oldphoto1');
            }

            $dataArray += ['photo1' => $newName];
            unset($dataArray['oldphoto1']);



            $img2 = $this->request->getFile('photo2');

            if ($img2->isValid() && ! $img2->hasMoved()) {
                $newName = $img->getRandomName();
                $img2->move(ROOTPATH . 'uploads', $newName);
            }else {
                $newName = $this->request->getPost('oldphoto2');
            }

            $dataArray += ['photo2' => $newName];
            unset($dataArray['oldphoto2']);


            $img3 = $this->request->getFile('photo3');

            if ($img3->isValid() && ! $img3->hasMoved()) {
                $newName = $img3->getRandomName();
                $img3->move(ROOTPATH . 'uploads', $newName);
            }else {
                $newName = $this->request->getPost('oldphoto3');
            }

            $dataArray += ['photo3' => $newName];
            unset($dataArray['oldphoto3']);



            $img4 = $this->request->getFile('photo4');

            if ($img4->isValid() && ! $img4->hasMoved()) {
                $newName = $img4->getRandomName();
                $img4->move(ROOTPATH . 'uploads', $newName);
            }else {
                $newName = $this->request->getPost('oldphoto4');
            }

            $dataArray += ['photo4' => $newName];
            unset($dataArray['oldphoto4']);


            if ($this->CommonModel->updateData('add_property', 'property_id', $id, $dataArray)) {
                $session->setFlashdata('message', '<div class="alert alert-success text-center">Property Updated Successfully</div>');
                return redirect()->to('manage-property');
            }
        }
        $data['property'] = $this->CommonModel->getDatawhere('add_property', 'property_id', $id);
        $data['broker'] = $this->CommonModel->getData('add_broker');

        return view('admin/update-property', $data);   
    }

    public function delete($id)
    {
        $session = session();

        if($session->get('admin_id') == ''){
            return redirect()->to('admin-login');
        }
        
        if($this->CommonModel->deleteData('add_property', 'property_id', $id)){
            $session->setFlashdata('message', '<div class="alert alert-success text-center">Property Deleted Successfully</div>');
            return redirect()->to('manage-property');
        }
    }
   
}