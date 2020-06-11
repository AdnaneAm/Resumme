<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use App\Http\Resources\Resume as ResumeResources;

class ResumeController extends Controller
{
    public function index(){
        $resumes=Resume::paginate(5);
        return ResumeResources::collection($resumes);
    }
    public function show($id){
        $resume=Resume::find($id);
        return $resume;
    }
    public function store(Request $request){
        $resume=new Resume;
        $resume->name=$request->name;
        $resume->description=$request->description;
        $resume->thumbnail="zaekzeamldsdksmlzaezk";
        $resume->save();
    }
    public function update(Request $request,$id){
        $resume=Resume::find($id);
        $resume->name=$request->name;
        $resume->description=$request->description;
        $resume->save();
    }
}
