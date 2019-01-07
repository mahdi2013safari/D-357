<?php

namespace App\Http\Controllers;

use App\DentalDefectList;
use App\Doctor;
use App\Income;
use App\Medicine;
use App\Patient;
use App\Prescription;
use App\Teeth;
use App\TeethCoverType;
use App\TeethShade;
use App\Treatment;
use App\TreatmentList;
use App\XRay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
{

    protected $idPatient;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->user()->department=='doctor'){
        $id = Auth()->user()->doctor_id;
        $operation = Doctor::find($id)->patient_for_today;
        }
        $operations=Patient::paginate(10);
        $doctor = Doctor::all();
        return view('doctor_operations',compact('operation','doctor','operations'));
    }
    public function prosthesis(){
        if (Auth()->user()->department=='doctor'){
            $id = Auth()->user()->doctor_id;
            $operation = Doctor::find($id)->patient_for_today;
        }
        $operations=Patient::paginate(10);
        $doctor = Doctor::all();
        return view('prosthesis_doctor_operation',compact('operation','doctor','operations'));

    }
    public function prosthesis_patient($id){
        $patient_in_treatment = Patient::find($id);

        $checkValue = Patient::find($id)->treatment;
        foreach ($checkValue as $ch) {
            if ($ch->visits == 0) {
                $ch->visits = 1;
            } else {
                $ch->visits = $ch->visits + 1;
            }
        }
        $prescription = Prescription::where('patient_id','=',$id)->get();
        $medicine =  Medicine::all();
        $treatments = Treatment::find($id);

        $treatementList = TreatmentList::all();

        $dentalDefectList = DentalDefectList::all();

        $teethShades = TeethShade::all();

        $teethTypeCovers = TeethCoverType::all();

        $patient_id = $patient_in_treatment->id;


        $teeth = Teeth::where('patient_id','=',$id)->paginate(10);
        $tee=   DB::table('teeths')->select('tooth_number')->where('patient_id','=',$id)->distinct()->get();

        $nextId = DB::table('treatments')->max('id') + 1;

//              return table general treatment
        $teeth = Teeth::where('patient_id','=',$id)->where('treatment_id','=',$nextId)->where('type_cover','=',null)->paginate(32);

//                return table prosthesis treatment
        $teeth_pros = Teeth::where('patient_id','=',$id)->where('treatment','=',null)->paginate(32);


//                return $last_treatment;
        return view('prosthesis_start_operation', compact('patient_in_treatment', 'patient_id', 'checkValue',
            'treatementList', 'dentalDefectList', 'treatments','medicine','prescription' , 'teethShades',
            'teethTypeCovers','teeth','tee','teeth_pros'));


    }

    public function next_appointment_list(Request $request)
    {
        $id = Auth()->user()->doctor_id;
        if($request->date == null){
            $next_appointment = Patient::where('doctor_id','=',$id)
                ->where('next_appointment','>',Carbon::today())->get();
        }else{
            $next_appointment = Patient::where('doctor_id','=',$id)
                ->where('next_appointment','>',Carbon::today())
                ->where('next_appointment','=',$request->date)->get();
        }
        return view('next_appointment_list',compact('next_appointment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient_in_treatment = Patient::find($id);

        $checkValue = Patient::find($id)->treatment;
        foreach ($checkValue as $ch) {
            if ($ch->visits == 0) {
                $ch->visits = 1;
            } else {
                $ch->visits = $ch->visits + 1;
            }
        }
                $prescription = Prescription::where('patient_id','=',$id)->get();
                $medicine =  Medicine::all();
                $treatments = Treatment::find($id);

                $treatementList = TreatmentList::all();

                $dentalDefectList = DentalDefectList::all();

                $teethShades = TeethShade::all();

                $teethTypeCovers = TeethCoverType::all();

                $patient_id = $patient_in_treatment->id;


                $teeth = Teeth::where('patient_id','=',$id)->paginate(10);
                $tee=   DB::table('teeths')->select('tooth_number')->where('patient_id','=',$id)->distinct()->get();

                $nextId = DB::table('treatments')->max('id') + 1;

//              return table general treatment
                $teeth = Teeth::where('patient_id','=',$id)->where('treatment_id','=',$nextId)->where('type_cover','=',null)->paginate(32);

//                return table prosthesis treatment
                $teeth_pros = Teeth::where('patient_id','=',$id)->where('treatment','=',null)->paginate(32);


//                return $last_treatment;
                return view('treatment_operation', compact('patient_in_treatment', 'patient_id', 'checkValue',
                    'treatementList', 'dentalDefectList', 'treatments','medicine','prescription' , 'teethShades',
                    'teethTypeCovers','teeth','tee','teeth_pros'));


    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $treatment = new Treatment();

            $treatment->description = $request->description;
            $treatment->type_treatment = $request->type_treatment;
            $treatment->estimated_fee = $request->estimated_fee;
            $treatment->discount = $request->discount;
            $treatment->remaining_fee = $treatment->estimated_fee - $treatment->discount;
            $treatment->paid_amount = 0;
            $treatment->visits = $request->input('visits');
            $treatment->patient_id = $request->input('FK_id_patient');
            $treatment->status_pay = true;
            $treatment->have_xray = $request->have_xray;
            $treatment->created_at = Carbon::now();
            if ($treatment->have_xray == null) {
                $treatment->have_xray = 'no';
            }
            if ($request->status_visits == null) {
                $treatment->status_visits = 'not complete';
            } else {
                $treatment->status_visits = $request->status_visits;
            }


            $treatment->description = $request->description;
            $treatment->type_treatment = $request->type_treatment;
            $treatment->estimated_fee = $request->estimated_fee;
            $treatment->discount = $request->discount;
            $treatment->remaining_fee = $treatment->estimated_fee - $treatment->discount;
            $treatment->paid_amount = 0;
            $treatment->visits = $request->input('visits');
            $treatment->patient_id = $request->input('FK_id_patient');
            $treatment->status_pay = true;
            $treatment->have_xray = $request->have_xray;
            $treatment->created_at = Carbon::now();
            if ($treatment->have_xray == null) {
                $treatment->have_xray = 'no';

            }
        }
        catch (\Exception $e) {
            if ($e->getCode() == '42S22'){
                $column_not_found = 'column not found';
                return view('errors_page',compact('column_not_found'));
            }
        }


    }


    public function checkVisits()
    {
        $treatment = new Treatment();
        $count_visits = 0;

        if ($treatment->visits > 1) {
            $treatment->visits = $count_visits + 2;
        } else if ($treatment->visits > 2) {
            $count_visits .= $count_visits++;
        } else {
            $count_visits = 0;
        }
        return $count_visits;
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param $id
     * @internal param Treatment $treatment
     */
    public function show(Request $request)
    {
    }


    public function take_xray_again($id)
    {
        $treatment = Treatment::find($id);
        $treatment->have_xray = '0';
        $treatment->update();
        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Treatment $treatment
     */
    public function edit($id)
    {
        $treatment = Treatment::find($id);
        $treatementList = TreatmentList::all();
        $dentalDefectList = DentalDefectList::all();
        $teethShadeList = TeethShade::all();
        $teethCoverList = TeethCoverType::all();
        $teeth = Teeth::where('patient_id','=',$id)->paginate(10);
        $tee =   DB::table('teeths')->select('tooth_number')->where('patient_id','=',$id)->distinct()->get();
        $patient_in_treatment = Patient::find($id);
        return view('treatment_operation_edit',compact('treatment','treatementList','dentalDefectList',
            'teethCoverList','teethShadeList','teeth','tee','patient_in_treatment'));

    }

    public function edit_treatment($id, $patient_id)
    {
        $patient_in_treatment = Patient::find($patient_id);


//        return $patient_in_treatment->visit;
//        dd($patient_in_treatment);

        $treatments = Treatment::orderBy('id', 'desc')->find($id);

        if ($treatments == null) {
            $checkValue = 0;
        } else {
            $checkValue = $treatments->visits;
        }


        $last_treatment = Treatment::orderBy('id', 'desc')->find($id);
        if ($last_treatment == null) {
            $checkValue = 1;
        } else {
            $checkValue = $last_treatment->visits;
        }

        $checkValue = $checkValue + 1;


        $treatementList = TreatmentList::all();
        $dentalDefectList = DentalDefectList::all();
        $patient_id = $patient_in_treatment->id;
        return view('treatment_operation_edit', compact('patient_in_treatment',
            'treatementList', 'patient_id', 'checkValue', 'dentalDefectList', 'last_treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Treatment $treatment
     */
    public function update(Request $request, $id)
    {
        $treatment = Treatment::find($id);
        $treatment->description = $request->description;
        $treatment->estimated_fee = $request->estimated_fee;
        $treatment->discount = $request->discount;
//        if($request->dentaldefect == null)
//        {
//            $treatment->dentaldefect = 'Prosthesis';
//            $treatment->treatment = 'Prosthesis';
//        }else{
//            $treatment->treatment = $request->input('treatment');
//            $treatment->dentaldefect = $request->input('dentaldefect');
//        }
        $treatment->status_visits = $request->status_visits;

        $treatment->update();
        return redirect('/operation');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treatment $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $treatment = Treatment::find($id);
        $treatment->delete();
        return redirect()->back();
    }
}