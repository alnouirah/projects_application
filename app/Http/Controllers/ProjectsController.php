<?php

namespace App\Http\Controllers;
use App\Projects;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    
    public function index(){
    
        $projects = Projects::all();
    
        return view('projects.index',compact('projects'));
    
    }


    public function store(){

        request()->validate([
            'title' =>  ['required','min:3'],
            'description'   =>  ['required','min:3']
        ]);

        Projects::create(request(['title','description']));

        return redirect('/projects');
    }



    public function create(){

        return view('projects.create');
    }



    public function show(Projects $project){

        return view('projects.show',compact('project'));

    }


    public function edit(Projects $project){

        return view('projects.edit',compact('project'));
    }


    public function update(Projects $project){

        request()->validate([
            'title' => ['required','min:5'],
            'description'   =>  ['required','min:5']
        ]);

        $project->update(request(['title','description']));

        return redirect('/projects');

    }

    public function destroy(Projects $project){

        $project->delete();

        return redirect('/projects');
    }




}
