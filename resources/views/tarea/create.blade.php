@extends('tema.app')
@section('title',"Nueva Tarea")

@section('contenido')
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
@endsection
