
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/taches.css') }}" rel="stylesheet" />
    <title>Gestion des tâches</title>
</head>

<body>

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
   
        <input id="check" action="{{ route('modifierStatus', $task->id) }}" method="post" type="checkbox"> 

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

</body>
</html>

