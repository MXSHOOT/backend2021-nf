<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    
    function index()
    {
        $students = Student::all();

        $data = [
            'message' => 'Get all students',
            'data' => $students
        ];

        return response()->json($data, 200);
    }

    function store(Request $request)
    {
        #tangkap data
        # input data ke database
        
        $student = Student::create([
            'nama' =>$request->nama,
            'nim' =>$request->nim,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        $data = [
            'message' => 'Student is created',
            'data' => $student
        ];

        return response()->json($data, 201);
    }
    function show($id){
        $student = Student::find($id);

        if ($student) {
            $data = [
                'message' => "Get Detail Student",
                'data' => $student    
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
        #cari data berdasarkan id
        #update

        #bug: id tidak ada (berhasil)
        #bug: jika data tidak dikirim

        $student = Student::find($id);

        if ($student){ #bisa dengan request->all untuk langsung semua
            $student->update([
                'nama' =>$request->nama ?? $student->nama,
                'nim' =>$request->nim ?? $student->nim,
                'email' =>$request->email ?? $student->email,
                'jurusan' =>$request->jurusan ?? $student->jurusan
            ]);
        
            $data = [
                'message' => "Student is update",
                'data' => $student
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
        #cari id
        #jika ada, hapus datanya

        $student = Student::find($id);

        if ($student){
            $student->delete();

            $data = [
                'message' => 'Student is delete'
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
