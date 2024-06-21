@extends('tasks.layouts.app')

@section('title', 'Modification de tâches')

@section('main')
<h1> Modifier </h1>
<form action="{{ route('modifierTaches', $task->id) }}" method="get">
    <input value ="{{ $task->title }}"  type="text" name="title" placeholder="Modifier la tâche" > 
    <button type="submit"> Modifier </button>

    <!-- <input value =""  type="text" name="title" placeholder="Modifier la description" > 
    <button type="submit"> Modifier </button> -->


</form>
@endsection