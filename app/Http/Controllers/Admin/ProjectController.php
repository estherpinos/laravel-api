<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;
use App\Functions\Helper;



class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *      * @return \Illuminate\Http\Response

     */
    public function create()
    {
        $method = 'POST';
        $route = route('admin.projects.store');
        $project = null;
        $types = Type::all();
        $technologies= Technology::all();
        return view('admin.projects.create', compact('project', 'types', 'technologies'));

    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        $form_data = $request->all();
        $new_project = new Project();

        $new_project->title = $form_data['title'];
        $new_project->description = $form_data['description'];
        $new_project->type_id = $form_data['type_id'];
        $new_project->slug  = Helper::generateSlug($form_data['title'], Project::class);


        $new_project->save();

        $new_project->technologies()->attach($form_data['technology_id']);



        return redirect()->route('admin.projects.show', $new_project);

    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     *
     */
    public function show(string $id)
    {
        $project = Project::find($id);
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $request->all();
        $project->update($form_data);

        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the specified resource from storage.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Il project è stato eliminato correttamente');

    }
}
