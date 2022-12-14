@extends('tema.app')
@section('title',"Listado de Tareas")
@section('contenido')
    <div class=" ">

        <h1 class="text-xl my-5">Registrar Nueva Tarea</h1>

        <form class="flex border justify-around" action="{{ route('tarea.store') }}" method="POST">
          <x-tarea-form-body />
        </form>
        @if ($errors->any())
          <div class="flex alert alert-danger ">
              <ol class="list-disc flex-col">
                  @foreach ($errors->all() as $error)
                      <li class="text-md">{{ $error }}</li>
                  @endforeach
              </ol>
          </div>
      @endif

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

                            <form action="{{ route("tarea.destroy", $tarea) }}" method="post" >
                                @csrf
                                @method('delete')
                                <button type="submit" href="">
                                    <img  class="mx-3 w-6" src="{{ asset('img/delete.png') }}" alt="Edit">
                                </button>
                            </form>

                            <a href="{{ route('tarea.show',$tarea) }}">
                                <img class="mx-3 w-6" src="{{ asset('img/view.png') }}" alt="View">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
       </div>
    </div>


@endsection
