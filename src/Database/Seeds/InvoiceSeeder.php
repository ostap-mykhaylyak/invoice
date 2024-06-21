<?php
namespace Invoice\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'customer_name' => 'John Doe',
                'total_amount'  => 100.00,
            ],
            [
                'customer_name' => 'Jane Smith',
                'total_amount'  => 150.00,
            ],
        ];
        $this->db->table('invoices')->insertBatch(\$data);
    }
}