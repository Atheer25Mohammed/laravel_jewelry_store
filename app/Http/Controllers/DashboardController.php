<?php
namespace App\Http\Controllers;

use App\Models\Jewelry;
use App\Models\Customer;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        
        $jewelriesCount = Jewelry::count();
        $customersCount = Customer::count();
        
        return view('dashboard.index', compact('jewelriesCount', 'customersCount'));
    }
    
}
