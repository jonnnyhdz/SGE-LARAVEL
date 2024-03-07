<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Documentos del Alumno</title>
</head>

<body>

    <div>
        <nav class="bg-blue-950 p-6 flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <a href="/">
                    <img src="/logo.png" alt="Logo" class="h-9 w-auto max-w-32 mr-20">
                </a>
    
                <div class="space-x-9 font-thin italic">
                    <a href="/DocumentosAlumnos"><button class="text-white">Proyectos</button></a>
                    <a href="/Gavo"><button class="text-white">Asesores</button></a>
                    <a href="/ControlLibros"><button class="text-white">Docentes</button></a>
                    <button class="text-white">Documentos</button>
                    <a href="/Alumnos"><button class="text-white">Alumnos</button></a>
                    <button class="text-white">Roles</button>
                </div>
            </div>
    
            <div class="flex items-center">
                <input type="text" placeholder="Buscar..." class="bg-white p-2 rounded-2xl mr-4">
            </div>
        </nav>


        <div style="margin-left: 2cm; margin-right: 2cm;">
            <br />
            <div class="bg-white p-4 font-bold border-b border-black text-2xl">
                Control de Documento del Alumno
            </div>
            <br />
            <div class="flex justify-between">
                <div class="bg-gray-50 p-4 shadow-md rounded-md w-1/2">
                    <label for="matricula" class="block font-bold mb-2">Matrícula del Alumno:</label>
                    <input type="text" id="matricula" name="matricula" class="w-full border border-gray-300 rounded-md p-2" />
                </div>
                <div class="bg-gray-50 p-4 shadow-md rounded-md flex flex-col items-end text-sm w-1/3">
                    <div class="font-bold">Reportes del Alumno</div>
                    <ul class="mt-4">
                        <li>Reporte 1</li>
                        <li>Reporte 2</li>
                        <li>Reporte 3</li>
                    </ul>
                </div>
            </div>
            <br />
            <div class="mt-4">
                <div class="bg-gray-100 p-4 shadow-md rounded-md w-1/2">
                    <label for="nombre" class="block font-bold mb-2">Nombre del Alumno:</label>
                    <input type="text" id="nombre" name="nombre" class="w-full border border-gray-300 rounded-md p-2" />
                </div>
            </div>
            <br />
            <div class="bg-gray-100 p-4 shadow-sm rounded-md mt-4">
                <div class="font-bold">Objetivos del Proyecto</div>
                <textarea rows="4" cols="50" class="mt-2 w-full border border-gray-300 rounded-md p-2"></textarea>
            </div>
            <br />
            <div class="bg-gray-100 p-4 shadow-md rounded-md mt-4 flex justify-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2">Editar</button>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Descargar</button>
            </div>
        </div>
    </div>

</body>

</html>
