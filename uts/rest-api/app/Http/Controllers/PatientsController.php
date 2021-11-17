<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

class PatientsController extends Controller
{
    function index()
    {
        $patients = Patients::all();

        $data = [
            'message' => 'Get all Patients',
            'data' => $patients
        ];

        return response()->json($data, 200);
    }

    function store(Request $request)
    {   
        $patients = Patients::create([
            'nama' =>$request->nama,
            'phone' =>$request->phone,
            'address' => $request->address,
            'status' => $request->status,
            'in_date_at' => $request->in_date_at,
            'out_date_at' => $request->out_date_at

        ]);

        $data = [
            'message' => 'Patients is created',
            'data' => $patients
        ];

        return response()->json($data, 201);
    }
    function show($id){
        $patients = Patients::find($id);

        if ($patients) {
            $data = [
                'message' => "Get Detail Patients",
                'data' => $patients  
            ];

            return response()->json($data, 200); #200 menanda artinya ok atau berhasil datanya
        } else {
            $data = [
                'message' => "Data not foun"
            ];

            return response()->json($data, 404);
        }

        

        
    }
    function update(Request $request, $id){
        $patients = Patients::find($id);

        if ($patients){ 
            $patients->update([
                'nama' =>$request->nama ?? $patients->nama,
                'phone' =>$request->phone ?? $patients->phone,
                'address' =>$request->address ?? $patients->address,
                'status' =>$request->status ?? $patients->status,
                'in_date_at' =>$request->in_date_at ?? $patients->in_date_at,
                'out_date_at' =>$request->out_date_at ?? $patients->out_date_at
            ]);
        
            $data = [
                'message' => "Patients is update",
                'data' => $patients
            ];
            return response()->json($data, 200);
        }else{
            $data =[
                'message' => "Data not found"
            ];

            return response()->json($data, 404);
        }
    }
    function destroy($id){
        $patients = Patients::find($id);

        if ($patients){
            $patients->delete();

            $data = [
                'message' => 'Patients is delete'
            ];

            return response()->json($data, 200);
        }else{
            $data = [
                'message' => 'Data no found'
            ];

            return response()->json($data, 404);
        }
    }
}
