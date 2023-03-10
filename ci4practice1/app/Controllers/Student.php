<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;
class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $result = new StudentModel();
        $mydata['studentdata'] = $result->findAll();

        // print_r($mydata);
        return view('student/StudentList',$mydata);

    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
       return view("student/add_newstudent");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
    $model_add = new StudentModel();
    $data = $this->request->getPost();
    // print_r($data);
    if($model_add->save($data)){
        return redirect("Student");
    }

    
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $modeledit = new StudentModel();
        $data['studentEdit'] = $modeledit->find($id);
        // print_r($data);
        return view("student/student_edite",$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $updatestudent = new StudentModel();
        $updateData = $this->request->getPost();
        if($updateData->update($id,$data)){
            return redirect()->to("student");
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $deletemodel = new StudentModel();
        $data = $deletemodel->delete($id);
        return redirect()->to("student");
    }
}
