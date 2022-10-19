<div class="flex">
    @csrf
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <!-- parte izquierda del formualario -->
    <div class=" p-4 w-96">

        <!-- input nombre tarea -->
          <div class="form-control w-full max-w-xs">
            <label for="InputNombre"  class="label">
              <span   class="label-text">Nombre de la tarea</span>
            </label>
            <input name="nombre" type="text" id="InputNombre" placeholder="Ingresa el Nombre de la Tarea" class="input input-bordered w-full max-w-xs"
            value="{{ old('nombre', $tarea->nombre) }}"/>
            <label class="label">
              <span class="label-text-alt">Obligatorio </span>
            </label>
          </div>

          <!-- input Descripion de tarea -->
          <div class="form-control w-full max-w-xs">
            <label  for="InputDescripcion" class="label">
              <span class="label-text">Descripion de la tarea</span>
            </label>
            <textarea  name="descripcion" class="textarea textarea-bordered" id="InputDescripcion" placeholder="Bio"
            >{{ old('descripcion', $tarea->descripcion) }}</textarea>

          </div>

        </div>



        <!-- parte centtral del formulario -->
        <div class=" p-4 w-96">

          <!-- input fecha limite de tarea -->
          <div class="form-control w-full max-w-xs">
            <label class="label" for="InputFechaLimite">
              <span class="label-text">Fecha Limite</span>
            </label>



            <input value="{{ old('fecha_limite',$tarea->fecha_limite->format('Y-m-d\TH:i')) }}" name="fecha_limite" type="datetime-local" id="InputFechaLimite" placeholder="Ingresa el Nombre de la Tarea" class="input input-bordered w-full max-w-xs" />
            <label class="label">
              <span class="label-text-alt">Obligatorio </span>
            </label>
          </div>

          <!-- input urgencia de la tarea de tarea -->
          <div class="form-control w-full max-w-xs">
              <label class="label">
                <span class="label-text">Urgencia</span>
              </label>
              <label class="cursor-pointer label"></label>
              <select id="SelectUrgencia" name="urgencia" class="select select-success w-full max-w-xs">
               @for($x = 0; $x < count($urgencias); $x++)
               <option value="{{ $x }}" @selected(old('urgencia', $tarea->urgencia) == $urgencias[$x] )>{{ $urgencias[$x] }}</option>
               @endfor
              </select>

          </div>

        </div>



        <!-- parte derecha del formulario -->
        <div class=" p-4 w-96">

          <!-- Input tarea finalizada-->

          <div class="form-control w-full max-w-xs">
            <label class="label">
              <span class="label-text">Estado</span>
            </label>
           <div class="border rounded-lg p-1">
            <label class="cursor-pointer label">
              <span class="label-text">Finalizado</span>
              <input name="finalizado" type="checkbox" value="1" class="checkbox checkbox-sm checkbox-accent" @checked(old('finalizado, $tarea->finalizado'))/>
            </label>
           </div>
          </div>
          <!-- boton -->

            <div class="form-control w-full max-w-xs mt-20">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

        </div>
</div>
