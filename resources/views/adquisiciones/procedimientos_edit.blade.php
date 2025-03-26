@extends('layouts.plantilla')
@section('title','Editar Procedimientos administrativos (Adquisiciones)')

@section('content')
<div class="row mt-2 ">
    <div class="d-flex flex-column col col-xs-1 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        <a class="btn btn-secondary" href="{{route('procedimientos.index')}}">Regresar a la lista</a>
    </div>
</div>
<form action="" id="frmProcedimientos">
    <div class="row mt-2">
        <div class="col col-sm-12 col-md-6 mb-2">
            <div class="card p-3">
                <div class="form__container ">
                    <div for="" class="form__title">Editar datos de {{$procedimiento->catalogo->nombre}} - {{$procedimiento->numero}}</div>
                    <div class="form__item">
                        <label for="ctrl_procedimiento" class="form-label form__item__title">Procedimiento</label>
                        <select class="form-select" name="ctrl_procedimiento" id="ctrl_procedimiento" required>
                            <option value="0">Seleccione</option>
                            @foreach($catalogo as $cat)
                            <option value="{{ $cat->id }}" {{ $cat->id == $procedimiento->catalogo_id ? 'selected' : '' }}>
                                {{ $cat->nombre }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form__item">
                        <label for="ctrl_numero" class="form-label form__item__title">Número</label>
                        <input type="text" name="ctrl_numero" id="ctrl_numero" class="form-control form__item__input" value="{{$procedimiento->numero}}" required>
                    </div>

                    <div class="form__item col-4">
                        <label for="ctrl_fecha" class="form-label form__item__title">Fecha</label>
                        <input type="date" id="ctrl_fecha" name="ctrl_fecha" class="form-control form__item_input" value="{{$procedimiento->fecha->format('Y-m-d')}}" required>
                    </div>



                    <div class="form__item">
                        <label for="ctrl_descripcion" class="form-label form__item__title">Descripción</label>
                        <textarea type="text" name="ctrl_descripcion" id="ctrl_descripcion" class="form-control form__item__input" required />{{$procedimiento->descripcion}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="mt-2">
            <button type="button" class="btn btn-success" id="btnActualizar">Actualizar</button>
            <!-- <button type="button" class="btn btn-secondary" id="btnLimpiarAlta">Limpiar</button> -->
        </div>
    </div>
</form>
@endsection

@section('scripts')
<script>
    urlProceso = "{{ route('procedimientos.update',$procedimiento->id) }}"
</script>
<script src="{{ asset('public/assets/js/procedimientosadquisiciones/procedimientos.js') }}"></script>
@endsection