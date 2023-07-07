<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <title>Lista de Tareas</title>
    </head>
    <body>
        <div class="contenedor">
            <h2>Lista de tareas</h2>
            <h5>Nueva Tarea:</h5>
            <input type="text" placeholder="crear tarea" id="ctjob">
            <p class="tareas-asig">Tareas asignadas: <span id="noas">0</span></p>
            <div id="jobs" class="tareas">
            </div>
        <span class="info">
                <p>Agrega una nueva tarea o elimina una ya creada anteriormente.</p>
                <p>Pulsa enter para crear tarea.</p>
        </span>
       </div>
    </body>
</html>