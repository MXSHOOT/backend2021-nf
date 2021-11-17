<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patients;

#200 artinya permintaan browser sukses
#201 artinya telah memenuhi
#404 artinya gagal atau tidak ada datanya

class PatientsController extends Controller
{
    #Get-Index
    function index()
    {
        $patients = Patients::all();
        # Degan menggunakan (Model)::all akan tampil semua isi data nya

        $data = [
            'message' => 'Get all Patients',
            'data' => $patients
        ];

        return response()->json($data, 200); #akan memberitahukan bahwa sukses
    }

    #Post-Store
    function store(Request $request)
    {   
        $patients = Patients::create([ #akan membuat dari tiap kolom didalam tabel Patients
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

    #Get-Show
    function show($id){
        $patients = Patients::find($id); 
        #hampir sama seperti index, hanya saja find akan menampilkan sesuai id yang dimana tidak semua id yang ditampilkan

        if ($patients) {
            $data = [
                'message' => "Get Detail Patients",
                'data' => $patients  
            ];

            return response()->json($data, 200); 
        } else {
            $data = [
                'message' => "Data not foun"
            ];

            return response()->json($data, 404);
        }
    }


    #Put-Update
    function update(Request $request, $id){ #Request atau meminta ke id
        $patients = Patients::find($id); #dan mencari atau id yang akan diubah

        if ($patients){ 
            $patients->update([ #ini adalah cara satu" untuk mengupdate dengan menaruh setiap kolomnya
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
    #Delete-Destroy
    function destroy($id){ #destroy ini digunakan untuk menghapus data
        $patients = Patients::find($id); #dan find ini untuk mencari id atau data mana yang mau dihapus

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
