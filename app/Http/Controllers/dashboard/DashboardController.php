<?php
namespace App\Http\Controllers\dashboard;
require __DIR__.'/../../../../vendor/autoload.php';

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use FortAwesome\FontAwesome\FontAwesome;
class DashboardController extends Controller
{
    public function index()
    {
        $fa = new FontAwesome();
        $homeIcon = $fa->icon('home');
        return view('layouts.theme.app',['homeIcon' => $homeIcon]);
    }
}
