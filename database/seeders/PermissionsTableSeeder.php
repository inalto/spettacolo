<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'contract_create',
            ],
            [
                'id'    => 18,
                'title' => 'contract_edit',
            ],
            [
                'id'    => 19,
                'title' => 'contract_show',
            ],
            [
                'id'    => 20,
                'title' => 'contract_delete',
            ],
            [
                'id'    => 21,
                'title' => 'contract_access',
            ],
            [
                'id'    => 22,
                'title' => 'person_create',
            ],
            [
                'id'    => 23,
                'title' => 'person_edit',
            ],
            [
                'id'    => 24,
                'title' => 'person_show',
            ],
            [
                'id'    => 25,
                'title' => 'person_delete',
            ],
            [
                'id'    => 26,
                'title' => 'person_access',
            ],
            [
                'id'    => 27,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 28,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 29,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 30,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 31,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 32,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 33,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 34,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 35,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 36,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 37,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 41,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 42,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 43,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 44,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 45,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 46,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 47,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 48,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 49,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 50,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 51,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 52,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 53,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 54,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 55,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 56,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 57,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 58,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 59,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 60,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 61,
                'title' => 'template_create',
            ],
            [
                'id'    => 62,
                'title' => 'template_edit',
            ],
            [
                'id'    => 63,
                'title' => 'template_show',
            ],
            [
                'id'    => 64,
                'title' => 'template_delete',
            ],
            [
                'id'    => 65,
                'title' => 'template_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
