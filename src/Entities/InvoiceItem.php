<?php
namespace Invoice\Entities;

use CodeIgniter\Entity\Entity;

class InvoiceItem extends Entity
{
    protected $attributes = [
        'id' => null,
        'invoice_id' => null,
        'description' => null,
        'amount' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
}
