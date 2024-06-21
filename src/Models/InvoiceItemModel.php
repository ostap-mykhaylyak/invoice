<?php
namespace Invoice\Models;

use CodeIgniter\Model;

class InvoiceItemModel extends Model
{
    protected $table = 'invoice_items';
    protected $primaryKey = 'id';
    protected $allowedFields = ['invoice_id', 'description', 'amount'];
    protected $useTimestamps = true;
    protected $returnType = 'Invoice\Entities\InvoiceItem';
}