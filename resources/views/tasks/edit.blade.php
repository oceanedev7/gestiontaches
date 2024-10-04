<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/edit.css') }}" rel="stylesheet" />
    <title>Edit</title>
</head>
<body>

<h1> Modifier </h1>
    <form action="{{ route('modifierTaches', $task->id) }}" method="post">
        @csrf
        <input value ="{{ $task->title }}"  type="text" name="title" placeholder="Modifier la tâche" > 
        <button type="submit"> Modifier </button>

        <!-- <input value =""  type="text" name="title" placeholder="Modifier la description" > 
        <button type="submit"> Modifier </button> -->


    </form>
</body>
</html>