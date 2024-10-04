@extends('tasks.layouts.app')

@section('title', 'Gestion des tâches')

@section('main')

<h1> Gestion des tâches </h1>

<form method="post" action="{{ route('ajouterTaches') }}">
    @csrf
<div>
    <input type="text" name="title" placeholder="Saisir votre tâche..." />
     <button id="button-task" type="submit"> Ajouter </button>
</div>
   
</form>


<div id="tasks-container">
    <div id="taches">
@if (isset($allTasks) && count($allTasks)>0)
@foreach ($allTasks as $task)
    <ul> 
   
        {{-- <input id="check" action="{{ route('modifierStatus', $task->id) }}" method="post" type="checkbox">  --}}
        <input id="check" action="#" method="post" type="checkbox"> 


    <span id="task-title">{{ $task->title }}</span>

    <div id="ligne"> </div>

                    
<a href="{{ route('editerTaches', $task->id) }}" id="modifier"><i class="fa-regular fa-pen-to-square"></i></a>
<a href="{{ route('supprimerTaches', $task->id) }}" id="supprimer"><i class="fa-regular fa-square-minus"></i></i></a>

    </ul>
@endforeach
@else 
<span> Pas de tâches </span>
@endif
</div>
</div>
@endsection