<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    //
    public function index (){
        $users = DB::select('select * from student');
        return view('student_view', ['users' => $users]);
    }

    public function create() {
        return view('student_form');
    }

    public function store(Request $request){
        $name = $request->name;
        DB::insert('insert into student (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "student">Click Here</a> to go back.';
    }

    public function show($id){
        $user = DB::selectOne('select * from student where id = ?', [$id]);
        return view('student_info', ['user' => $user]);
    }

    public function edit($id) {
        $user = DB::selectOne('select * from student where id = ?', [$id]);
        return view('student_edit', ['user' => $user]);
    }

    public function update(Request $request, $id) {
        $name = $request->input('name');
        DB::update('update student set name = ? where id = ?',[$name,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/student">Click Here</a> to go back.';
    }

    public function destroy($id) {
        DB::delete('delete from student where id = ?',[$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/student">Click Here</a> to go back.';
    }
}
