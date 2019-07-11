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

        $project  = new Projects();

        $project->title = request('title');
        
        $project->description = request('description');

        $project->save();


        return redirect('/projects');
    }

    public function create(){

        return view('projects.create');
    }

    public function show(){


    }

    public function edit($id){

        $project = Projects::findOrFail($id);

        return view('projects.edit',compact('project'));
    }


    public function update($id){
        $project = Projects::findOrFail($id);

        $project->title = request('title');

        $project->description = request('description');
        
        $project->save();

        return redirect('/projects');

    }

    public function destroy($id){

        $project = Projects::findOrFail($id);

        $project->delete();

        return redirect('/projects');
    }




}
