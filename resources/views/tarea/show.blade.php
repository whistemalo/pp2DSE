@extends("tema.app")
@section("title","Tarea")
@section("contenido")

<h3>Tarea : {{ $tarea-> nombre }}</i></h3>

    <ul>
        <li>Finalizada: <strong>{{ $tarea-> estaFinalizada() }}</strong></li>
        <li>Urgencia: <strong>{{ $tarea-> urgencia() }}</strong></li>
        <li>Fecha Limite: <strong>{{ $tarea-> fecha_limite->format('H:i  d/m/y') }}</strong></li>
    </ul>
    <p>Comentarios: {{ $tarea->descripcion }}</p>

    <div>
        <div>
            <form action="{{ route("tarea.destroy", $tarea) }}" method="post" >
                @csrf
                @method('delete')
                <button class="btn btn-primary" type="submit">Eliminar</button>

                </button>
            </form>
        </div>
    </div>

@endsection
