<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use Illuminate\Support\Facades\Redirect;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    private function loginFailed(){
        return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Logain Failed, Please try again!');
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'password' => 'required',
        ]);
   
        // $credentials = $request->only('email', 'password');
        if(Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])){
            return view('home');
        }
  
        return $this->loginFailed();
    }
    public function PostRegisteration(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:patients,email',
            'name' => 'required',
            'phone' => 'unique:patients,phone|numeric',
        ],[
            'phone.numeric' => "the phone must be a number"
        ]);
        
        // $input = $request->all();
        // if ($image = $request->file('patient-pic')){
        //     $path = 'images/patients/';
        //     $ext = $image->getClientOriginalExtension();
        //     $imageName = time(). '.' .$ext;
        //     $image->move($path , $imageName);
        //     $input['img'] = $imageName;
        // }
        // $check = Patient::create([
        //     'name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'phone' => $request->input('phone'),
        //     'birth_date' => $request->input('dob'),
        //     'password' => Hash::make($request->input('password')),
        // ]);
        // return redirect()->route('home');
    

    $patient = new Patient();
    if ($image = $request->file('patient-pic')){
        $path = 'images/patients';
        $ext = $image->getClientOriginalExtension();
        $imageName = time(). '.' .$ext;
        $image->move($path , $imageName);
        $patient->img = $imageName; 
    }
 
    
    $patient->name = $request->input('name');   
    $patient->email = $request->input('email');   
    $patient->phone = $request->input('phone');   
    $patient->birth_date = $request->input('dob');
    $patient->password = Hash::make($request->input('password'));
    $patient->save();
    
    if(Auth::guard('patient')->attempt(['email' => $request->email, 'password' => $request->password])){
        return redirect()->route('home');
    }

}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
