<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function afficher () {
    	$afficherTaches = Task::all();
//  var_dump ($afficherTaches);
    return view(
        'tasks.tache', ['allTasks'=>$afficherTaches]
    );}

    public function ajouter (Request $request) {
    	//  var_dump ($request);
        $request->validate(
            [
                'title'=>'required|string',
            ]);
         Task::create($request->all());
 
    return redirect("/");
    }

    public function supprimer ($id) {
    	
        $supp  = Task::findOrFail($id);
        $supp->delete();
        
        return redirect("/");}


        public function edit ($id) {

            $task=Task::findOrFail($id);  
            return view("tasks.edit", compact('task'));
    }
    

    public function modifier (Request $request, $id) {
          $validatedData =  $request->validate(
                [
                    'title'=>'required',
                ]);
            
                $task=Task::findOrFail($id);           
                $task->update($validatedData);
        
                return redirect("/");

            }

    // public function toggle($id)
    // {
        
    //     $task = Task::findOrFail($id);

    //    if ($task->status == 0) {
    //     $task->status = 1;
    // } else {
    //     $task->status = 0; 
    // }

    //     $task->save();

    //     return redirect("/");
    // }

    // public function toggle($id){
        
    //     $todo  = Task::findOrFail($id);
    //     if($todo){
    //       if ($todo->status) {
    //         $todo->status =0; 
    //       } else {
    //         $todo->status =1; 

    //       }  
    //         $todo->save();
    //     }
    //     @dd($todo);
    //     return back();
    // }

}