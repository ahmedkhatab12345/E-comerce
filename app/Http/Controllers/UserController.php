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
        $data = User::orderBy('id', 'desc')
            ->get();
        
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row) {
                       return '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}