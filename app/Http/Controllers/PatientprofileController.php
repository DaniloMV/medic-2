<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PatientprofileRequest;
use App\Patientprofile;

class PatientprofileController extends Controller
{
	// auth checker
	public function __construct()
	{
		$this->middleware('auth');
	}

	// return patient profile page
	public function index()
	{
		return view('patient.profile.index');
	}

	// return patient profiles api
	public function indexApi()
	{
        $ref_no = request('ref_no');
        $acc_no = request('acc_no');
        $name = request('name');
        $email = request('email');
        $is_active = request('is_active');
        $sortkey = request('sortkey');
        $results = Patientprofile::whereNotNull('created_at');

        if($ref_no) {
            $results = $results->where('ref_no', 'LIKE', '%'.$ref_no.'%');
        }
        if($acc_no) {
            $results = $results->where('acc_no', 'LIKE', '%'.$acc_no.'%');
        }
        if($name) {
            $results = $results->where('name', 'LIKE', '%'.$name.'%');
        }
        if($email) {
            $results = $results->where('email', 'LIKE', '%'.$email.'%');
        }
        if($is_active) {
            $results = $results->where('is_active', $is_active);
        }
        if($sortkey) {
            $results = $results->orderBy($sortkey, $request('reverse') == 'true' ? 'asc' : 'desc');
        }else{
            $results = $results->latest();
        }

        $results = $results->paginate(request('perpage'));
        return $results;
	}

    // showing create patient page()
    public function create()
    {
        return view('patient.profile.create');
    }

    // storing new patient profile creation()
    public function store(PatientprofileRequest $request)
    {
        Patientprofile::create(request()->all());

        return back();
    }

    // showing patient profile single view based on id (Patientprofile $patient)
    public function edit(Patientprofile $patient)
    {
        return view('patient.profile.edit', compact('patient'));
    }

    // update patient profile single view(Patientprofile $patient)
    public function update(Patientprofile $patient)
    {
        if(request('delete')) {
            return redirect()->action('PatientprofileController@destroy', ['patient' => $patient]);
        }
        $patient->update(request()->all());

        return back();
    }

    // delete patient profile single($patient)
    public function destroy(Patientprofile $patient)
    {
        $patient->delete();

        return redirect()->action('PatientprofileController@index');
    }
}
