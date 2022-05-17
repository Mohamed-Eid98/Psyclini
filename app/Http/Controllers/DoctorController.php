<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;
use Symfony\Component\Console\Input\Input;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::Paginate(9);
        return view('html.doctors', compact('doctors'));
    }
    public function search(Request $request)
{
    $specialization = $request->input('speciality');
    $rating = $request->input('rating');

        $doctors = Doctor::where(function ($q) use ($rating, $specialization){
            
            $q->where('speciality' , 'LIKE' , '%'.$specialization.'%')
                ->Where('rating' , "LIKE" , $rating.'%');
        })->paginate(6);
        // $doctors = Doctor::where('rating' , "LIKE" , '%'.$rating.'%')->paginate(6);
        return view('html.doctors', compact('doctors'));    
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        if(Auth::guard('doctor')->attempt(['email' => $request->email, 'password' => $request->password])){
           return view('doctor-dashboard.index');        
        }
  
        return ' nooooo' ;
    }
    public function show_profile(){
        return view('html.doctor page');
    }
    public function logout()
    {
        Auth::guard('doctor')->logout();
        return redirect()
            ->route('home')
            ->with('status','Admin has been logged out!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
public function doctor_index()
{
    return view('doctor-dashboard.index');
}
public function create_post()
{
    return view('doctor-dashboard.create post');
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDoctorRequest  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
