<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // recupére ce qui à été envoyé sur la requete
        // return $request->all();

        //affiche la requete
        // $students = Student::all();
        // dd(compact('students'));

        //Si on change les name dans le formulaire
        // Student::create([
        //     'matricule' => $request->get('matricule'),
        //     'first_name' => $request->get('prenom'),
        //     'last_name' => $request->get('nom'),
        //     'email' => $request->get('email'),
        //     'phone' => $request->get('tel'),
        // ]);

        // $student = new Student;
        // $student->matricule = $request->matricule;
        // $student->first_name = $request->first_name;
        // $student->last_name = $request->last_name;
        // $student->email = $request->email;
        // $student->phone = $request->phone;
        // $student->save();
        // return redirect('student')->with('flash_message', 'Ajout étudiant réussi!');

        $validation = $request->validate([
            'matricule' => 'required|unique:students|max:15',
            'first_name' => 'required|max:50',
            'last_name' => 'required|max:50',
            'email' => 'required|email',
            'phone' => 'required|max:15'
        ]);
        //return $validation;
        Student::create($validation);
        return redirect('student')->with('status', 'Etudiant ajouté avec success!');

        // $input = $request->all();
        // Student::create($input);
        // return redirect('student')->with('flash_message', 'Ajout étudiant réussi!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
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
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('student')->with('status', 'Etudiant modifié avec success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('student')->with('flash_message', 'Etudiant supprimé!');
    }
}
