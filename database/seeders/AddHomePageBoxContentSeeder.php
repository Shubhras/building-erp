<?php

namespace Database\Seeders;

use App\Models\FrontSetting;
use Illuminate\Database\Seeder;

class AddHomePageBoxContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $userTenantId = session('tenant_id', null);
        FrontSetting::create([
            'key'       => 'home_page_box_title',
            'value'     => 'Team Work',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        FrontSetting::create([
            'key'       => 'home_page_box_description',
            'value'     => 'Proin gravida nibh vel velit auctor aliquet.',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);

        // Home Page Step Section
        FrontSetting::create([
            'key'       => 'home_page_step_1_title',
            'value'     => 'Innovation',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        FrontSetting::create([
            'key'       => 'home_page_step_1_description',
            'value'     => 'Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);

        FrontSetting::create([
            'key'       => 'home_page_step_2_title',
            'value'     => 'Accountability',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        FrontSetting::create([
            'key'       => 'home_page_step_2_description',
            'value'     => 'Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);

        FrontSetting::create([
            'key'       => 'home_page_step_3_title',
            'value'     => 'Commitment',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        FrontSetting::create([
            'key'       => 'home_page_step_3_description',
            'value'     => 'Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);

        FrontSetting::create([
            'key'       => 'home_page_step_4_title',
            'value'     => 'Team Work',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        FrontSetting::create([
            'key'       => 'home_page_step_4_description',
            'value'     => 'Lorem ipsum dolor sit amet consectetur imp adipiscing elit justo aliquet elit sed convallisolo neque aliquam elementum dolr.',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);

        // Home Page Certified Section
        FrontSetting::create([
            'key'       => 'home_page_certified_box_title',
            'value'     => 'Certified Doctor',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        FrontSetting::create([
            'key'       => 'home_page_certified_box_description',
            'value'     => 'Proin gravida nibh vel velit auctor aliquet.',
            'type'      => FrontSetting::HOME_PAGE,
            'tenant_id' => $userTenantId != null ? $userTenantId : null,
        ]);
        
    }
}
