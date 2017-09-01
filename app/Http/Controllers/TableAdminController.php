<?php

namespace App\Http\Controllers;

use Jarboe;

class TableAdminController extends Controller
{
    
    public function settings()
    {
        return Jarboe::table(\App\Definitions\Settings::class);
    } // end settings
    
    public function users()
    {
        return Jarboe::table(\App\Definitions\Users::class);
    } // end users
    
    public function roles()
    {
        return Jarboe::table(\App\Definitions\Roles::class);
    } // end roles
    
    public function test()
    {
        return Jarboe::table(\App\Definitions\Test::class);
    } // end test
    
    public function finances()
    {
        return Jarboe::table(\App\Definitions\Finances::class);
    } // end finances
    
    public function financeTypes()
    {
        return Jarboe::table(\App\Definitions\FinanceTypes::class);
    } // end financeTypes
    
    public function structure()
    {
        return Jarboe::tree(\App\Models\Structure::class);
    } // end structure
    
}
