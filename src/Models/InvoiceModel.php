<?php
namespace Invoice\Models;

use CodeIgniter\Model;

class InvoiceModel extends Model
{
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    protected $allowedFields = ['customer_name', 'total_amount'];
    protected $useTimestamps = true;
    protected $returnType = 'Invoice\Entities\Invoice';
}