<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function adult()
    {
        return view('dashboard');
    }
    public function site()
    {
        return view('site');
    }
    public function admin()
    {
        return view('dashboard');
    }
    public function login()
    {
        return view('auth.adminlogin');
    }
    public function checkadminlogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email'));
    }



}