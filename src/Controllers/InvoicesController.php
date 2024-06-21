<?php
namespace Invoice\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Invoice\Models\InvoiceModel;

class InvoicesController extends ResourceController
{
    protected $modelName = 'Invoice\Models\InvoiceModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    public function show($id = null)
    {
        $invoice = $this->model->find($id);
        if ($invoice) {
            return $this->respond($invoice);
        }
        return $this->failNotFound('Invoice not found');
    }

    public function create()
    {
        $data = $this->request->getPost();
        if ($this->model->insert($data)) {
            return $this->respondCreated($this->model->find($this->model->insertID()));
        }
        return $this->failValidationErrors($this->model->errors());
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if ($this->model->update($id, $data)) {
            return $this->respond($this->model->find($id));
        }
        return $this->failValidationErrors($this->model->errors());
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['id' => $id]);
        }
        return $this->failNotFound('Invoice not found');
    }
}