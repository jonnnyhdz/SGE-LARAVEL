<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biblioteca</title>
    @vite('resources/css/app.css')
</head>
<style>
    .king{
        background-color: #325B87;
    }
</style>

<body class="gap-0">
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
    </div>
    <section style="margin-left: 2cm; margin-right: 2cm;">
        <div class="p-5">
            <div class="bg-white p-4 font-bold border-b border-black text-2xl">
                Control de libros del Alumno
            </div>
            <div class="flex flex-col lg:flex-row justify-between px-4 py-4 w-full">
                <div class="relative">
                    <a type="button" href="{{ url('Detalles') }}" class="king p-2 mb-6 rounded-full text-white">Colaboracion compartida</a>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6">
                        <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                        <div class="relative mx-2 my-2">
                            <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                            <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                        </div>
                    </div>
                    <div class="flex flex-col rounded-xl bg-slate-200 p-3">
                        <p class="font-semibold">Colaboradores</p>
                        <div class="relative mx-2 my-2">
                            <select name="select" id="select" class="w-full rounded-md font-bold p-1">
                                <option value="">Colaboradores</option>
                            </select>
                        </div>

                    </div>
                </div>
            </div>
            <div class="px-2 lg:px-20 py-10">
                <hr class="border-2">
                <div class="flex flex-col">
                    <p class="font-bold text-2xl mt-4 mb-6">Detalles del Libro</p>
                    <div class="p-2">
                        <p class="font-semibold mb-6">Titulo del libro</p>
                        <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6  w-full lg:w-2/5">
                            <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                            <div class="relative mx-2 my-2">
                                <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                                <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                            </div>

                        </div>
                        <p class="font-semibold mb-6">Autor del libro</p>
                        <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6  w-full">
                            <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                            <div class="relative mx-2 my-2">
                                <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                                <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                            </div>

                        </div>
                        <p class="font-semibold mb-6">Carrera</p>
                        <div class="flex flex-col rounded-xl bg-slate-200 p-3 mb-6  w-full">
                            <p class="font-semibold">Ingrese la matricula del estudiante colaborador</p>
                            <div class="relative mx-2 my-2">
                                <input type="text" name="est" id="est" class="bg-white rounded-md w-full pl-36 p-1 font-bold">
                                <label for="est" class="absolute text-slate-400 left-2 top-1">Matricula:</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>