<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
Use PDF;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'agama'=>'required',
            'asal_sekolah'=>'required',
            'minat_jurusan'=>'required',
        ]);
        Student::create($request->all());
        return redirect()->route('student.index')->with('success', 'Selamat, Anda Sudah Terdaftar Di SMK Merdeka Belajar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama'=>'required',
            'jk'=>'required',
            'alamat'=>'required',
            'agama'=>'required',
            'asal_sekolah'=>'required',
            'minat_jurusan'=>'required',
        ]);
        $student->update($request->all());
        return redirect()->route('student.index')->with('success', 'Data Berhasil Diubah!');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Data Sudah Dihapus');
    }

    public function cetak($id)
    {
        $student = Student::find($id);

        $cetak = PDF::loadview('student.cetak', compact('student'));
        return $cetak->stream();
    }
}
