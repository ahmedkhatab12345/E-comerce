<?php
     
namespace App\Http\Controllers;
     
use DataTables;
use App\Models\User;
use Illuminate\Http\Request;
     
class UserController extends Controller
{
    /**
     * users view
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('users');
    }

    /**
     * data
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request)
    {
    }
}