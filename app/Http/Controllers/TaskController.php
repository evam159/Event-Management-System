<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\File;


// use Illuminate\Console\View\Components\Task;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks=Task::all();
        return view("pages.home")->with("tasks", $tasks);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tasks=Task::all();
        return view('pages.add',compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tasks=new Task();
        if ($request->hasFile('image'))
        {
           $file = $request->file('image');
           $ext = $file->getClientOriginalExtension();
           $filename = time().'.'.$ext;
           $file->move('assets/uploads/',$filename);
           $tasks->image = $filename;
        }
        $tasks->done=$request->input('done')==TRUE ? '1':'0';
        $tasks->published=$request->input('published')==TRUE ? '1':'0';
        $tasks->company_name=$request->company_name;
        $tasks->module=$request->module;
        $tasks->task=$request->task;
        $tasks->assigned_to=$request->assigned_to;
        $tasks->start_date=$request->start_date;
        $tasks->end_date=$request->end_date;
        $tasks->progress=$request->progress;
        $tasks->q_a=$request->q_a;

        $tasks->save();

        // dd($data);

        return redirect()->route('tasks.index')->with('status','Task has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Task::find($id);
        return view('pages.edit',compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tasks = Task::find($id);
        if ($request->hasFile('image'))
        {
            $path = 'assets/uploads/'.$tasks->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/',$filename);
            $tasks->image = $filename;
         }

        $tasks->done=$request->input('done')==TRUE ? '1':'0';
        $tasks->published=$request->input('published')==TRUE ? '1':'0';
        $tasks->company_name=$request->company_name;
        $tasks->module=$request->module;
        $tasks->task=$request->task;
        $tasks->assigned_to=$request->assigned_to;
        $tasks->start_date=$request->start_date;
        $tasks->end_date=$request->end_date;
        $tasks->progress=$request->progress;
        $tasks->q_a=$request->q_a;
        $tasks->save();
        return redirect()->route('tasks.index')->with('status','Resident has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect()->route('tasks.index');
    }
}
