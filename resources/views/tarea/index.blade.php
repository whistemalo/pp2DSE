@extends('tema.app')
@section('title',"Listado de Tareas")
@section('contenido')
    <div class=" ">
        <h1>
            Listado de Tareas
        </h1>

       <div class=" mt-10 justify-center  md:max-w-4xl lg:max-w-7xl mx-auto flex p-1 ">
        <table class="border">
            <thead >
                <tr>
                    <th class="w-40 px-4 py-2">Nombre</th>
                    <th class="w-10 px-4 py-2">Finalizada</th>
                    <th class="w-40 px-4 py-2">Vecimiento</th>
                    <th class="w-40 px-4 py-2">Descripcion</th>
                    <th class="w-40 px-4 py-2">Urgencia</th>
                    <th class="w-40 px-4 py-2">Opciones</th>
                </tr>
            </thead>


            <tbody >
                @foreach ($tareas as $tarea )
                    <tr class="ml-4">
                        <td class="text-center border w-52 px-4 py-2">{{ $tarea -> nombre }}</td>
                        <td class="text-center border w-10 px-4 py-2">{{ $tarea -> estaFinalizada()	 }}</td>
                        <td class="text-center border w-52 px-4 py-2">{{ $tarea -> fecha_limite->format(' d/m -- H:II') }}</td>
                        <td class="text-center border w-52 px-4 py-2">{{ $tarea -> descripcion }}</td>
                        <td class="text-center border w-52 px-4 py-2">{{ $tarea ->  urgencia() }}</td>
                        <td class="h-full border flex  py-2 justify-center items-center ">
                            <a href="{{ route('tarea.edit',$tarea) }}">
                                <img class="mx-3 w-6" src="{{ asset('img/edit.png') }}" alt="Edit">
                            </a>

                            <a href="">
                                <img class="mx-3 w-6" src="{{ asset('img/delete.png') }}" alt="Edit">
                            </a>

                            <a href="">
                                <img class="mx-3 w-6" src="{{ asset('img/view.png') }}" alt="Edit">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
       </div>
    </div>


@endsection
