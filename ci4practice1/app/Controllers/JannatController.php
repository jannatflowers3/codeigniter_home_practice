<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\JannatModel;

class JannatController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modelcreata = new JannatModel();
         $data['info'] = $modelcreata->findAll();
    //    print_r($data);
         return view("jannat/student_all_list",$data);

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
        $studentcreatae = new JannatModel();
        return view("jannat/jannat_add_newstudent");
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $modelcreatadata = new JannatModel();
        $data = $this->request->getPost();
    //  print_r($data);
    if($modelcreatadata->save($data)){
        return redirect("JannatController");
    }
 
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $editstudent = new JannatModel();
        $dataedit['editstudent'] =$editstudent->find($id);
          return view ("jannat/jannat_edit",$dataedit);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new JannatModel();
        $data = $this->request->getPost();
        // print_r($data);
        if ($model->update($id, $data)) {
            return redirect()->to("JannatController");
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $deletedata =  new JannatModel();
        $deletedata->delete($id);
        print_r($deletedata);
        return redirect()->to("JannatController");
    }
}
