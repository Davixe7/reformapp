<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $categories = Category::all();
      $projects = Project::published()->byName( $request->name )->byCategory( $request->category_id )->orderBy('created_at', 'DESC')->get();
      return view('projects.index', ['projects' => $projects, 'categories' => $categories ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Category::all();
      return view('projects.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $project = Project::create([
        'name' => $request->name,
        'description' => $request->description,
        'budget' => $request->budget,
        'due_date' => $request->due_date,
        'user_id' => auth()->id(),
        'category_id' => $request->category_id
      ]);
      
      return redirect()->route('projects.edit', ['project'=>$project])->with(['message'=>'Proyecto creado exitosamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {  
      $categories = Category::all();
      return view('projects.edit', ['project' => $project, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
      $project->update([
        'name' => $request->name,
        'description' => $request->description,
        'budget' => $request->budget,
        'due_date' => $request->due_date,
        'category_id' => $request->category_id ?: $project->category_id
      ]);
      
      return redirect()->route('projects.edit', ['project'=>$project])->with(['message'=>'Proyecto actualizado exitosamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
      $project->delete();
      return redirect()->route('projects.index')->with(['message'=>"Proyecto $project->id eliminado exitosamente"]);
    }
}
