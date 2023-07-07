<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Lista de Tareas</h1>
        <h5>Nueva Tarea:</h5>
        <form action="/tasks" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Título" required><br>
            <textarea name="description" placeholder="Descripción"></textarea><br>
            <button type="submit">Crear Tarea</button>
        </form>
        <h3>Listado de Tareas</h3>
        <ul>
            @foreach ($task as $task)
                <li>
                    <span class="tooltip" data-description="{{ $task->description }}">{{ $task->title }}</span>
                </li>
            @endforeach
        </ul>
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
