<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//***追加***
use Illuminate\Support\Facades\DB;
use App\member;
use App\contract;
use Carbon\Carbon;
use Validator;

class MainController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $now = Carbon::now()->format('YYYY-mm-dd');
        //dd($now);

        // $request->validate([
        //     'empno'=> 'required|unique:members'
        // ],
        // [
        //     'empno.required' => '社員番号は必須です。',
        //     'empno.unique' => '指定の社員番号は既に使用されています。',
        // ]);

        // $request->validate([
        //     'empno'=> 'required|unique:members|max:10'
        // ]);
        

        $validator = Validator::make($request->all(), [
            'empno'=> 'required|unique:members|max:10',
            'name'=> 'required|regex:/^[a-zA-Z0-9ａ-ｚA-Zぁ-んァ-ヶー一-龠]+$/|max:3'
            
        ]);

        if ($validator->fails()) {
            //dd($request->input('empno'));
                return redirect('/register')
                ->withErrors($validator)
                ->withInput($request->all());
            // $empno = $request->input('empno');
            // $name = $request->input('name');
            // $results = array(
            //     'empno' => $empno,
            //     'name' => $name
            // );
            //$back_url = "location.href='/bpproper.contractconfirm'";

            // return view('bpproper.contractconfirm', ['results' => $results,'Back' => $back_url])
            //         -> withErrors($validator);
            // dd($results);
            //return redirect('bpproper.register', ['results' => $results])-> withErrors($validator);
        }



        $parm_members =[
            'empno'=> $request->empno,
            'name'=> $request->name,
            'typeflag'=> $request->typeflag,
            'dep'=> $request->depname,
            'email'=> $request->mail,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];

        $results_members= DB::table('members')->insertGetID($parm_members);

        //dd($results_empno);

        $parm_contracts =[
            'status_flag'=> $request->statusflag,
            'contract_comp'=> $request->contractname,
            'contract_dep'=> $request->contractdepname,
            'contract_start_date'=> $request->datetimepicker1,
            'contract_end_date'=> $request->datetimepicker2,
            'brc_contract_start_date'=> $request->datetimepicker3,
            'brc_contract_end_date'=> $request->datetimepicker4,
            'brc_staff_start_date'=> $request->datetimepicker5,
            'emp_id'=> $request->empno,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ];
        //dd($parm_contracts);
        
        DB::table('contracts')->insert($parm_contracts);

        
        // $results = DB::table('members')
        //     ->join('contracts', 'members.id', '=', 'contracts.emp_id')
        //     //->select('members.*', contracts.date_format(brc_contract_start_date, "%d/%m/%Y"))
        //     ->select("members.*", "contracts.status_flag", "contracts.contract_comp","contracts.contract_dep",
        //         DB::raw("DATE_FORMAT(contracts.brc_staff_start_date, '%Y-%m-%d') as brc_staff_start_date"),
        //         DB::raw("DATE_FORMAT(contracts.contract_start_date, '%Y-%m-%d') as contract_start_date"),
        //         DB::raw("DATE_FORMAT(contracts.contract_end_date, '%Y-%m-%d') as contract_end_date"))
        //         ->where('members.id', $results_members)
        //         ->get();
        //  return view('bpproper.contractconfirm', ['results' => $results]);

        $results = DB::table('members')
        ->join('contracts', 'members.empno', '=', 'contracts.emp_id')
        //->select('members.*', contracts.date_format(brc_contract_start_date, "%d/%m/%Y"))
        ->select("members.*", "contracts.status_flag", "contracts.contract_comp","contracts.contract_dep",
            DB::raw("DATE_FORMAT(contracts.brc_staff_start_date, '%Y-%m-%d') as brc_staff_start_date"),
            DB::raw("DATE_FORMAT(contracts.contract_start_date, '%Y-%m-%d') as contract_start_date"),
            DB::raw("DATE_FORMAT(contracts.contract_end_date, '%Y-%m-%d') as contract_end_date"))
            ->where('members.id', $results_members)
            ->get();
            return view('bpproper.contractconfirm', ['results' => $results]);

    }

    /**
     * Display the specified resource.
     * 
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
