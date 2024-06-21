<?php
namespace Invoice\Entities;

use CodeIgniter\Entity\Entity;

class Invoice extends Entity
{
    protected $attributes = [
        'id' => null,
        'customer_name' => null,
        'total_amount' => null,
        'created_at' => null,
        'updated_at' => null,
    ];
}
