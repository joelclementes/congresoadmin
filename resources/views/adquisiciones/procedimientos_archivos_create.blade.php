@extends('layouts.plantilla')
@section('title','Procedimientos administrativos (Adquisiciones)')

@section('content')
<div class="row mt-2 ">
    <div class="d-flex flex-column col col-xs-1 col-sm-2 col-md-2 col-lg-2 col-xl-2">
        <a class="btn btn-secondary" href="{{route('procedimientos.index')}}">Regresar a la lista</a>
    </div>
</div>

<div class="row mt-2">
    <div class="col col-sm-12 col-md-6 mb-2">
        <div class="card p-3">
            <div class="form__container ">
                <div for="" class="data__title">Datos del procedimiento administrativo</div>

                <div class="data__item">
                    <label class="form-label data__item__title">Procedimiento</label>
                    <div class="data__item__value">{{$procedimiento->catalogo->nombre}}</div>
                </div>
                <div class="data__item">
                    <label class="form-label data__item__title">Número</label>
                    <div class="data__item__value" id="procedimiento_numero">{{$procedimiento->numero}}</div>
                </div>
                <div class="data__item col-4">
                    <label class="form-label data__item__title">Fecha</label>
                    <div class="data__item__value">{{$procedimiento->fecha->format('d-m-Y')}}</div>
                </div>
            </div>
            <div class="data__container">
                <div class="data__item">
                    <label class="form-label data__item__title">Descripción</label>
                    <div class="data__item__value">{{$procedimiento->descripcion}}</div>
                </div>
            </div>
            @if($archivos->count()>0)
            <table id="archivosTable" class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Proceso</th>
                        <th>Archivo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($archivos as $archivo)
                    <tr>
                        <td>{{$archivo->proceso->nombre}}</td>
                        <td>{{$archivo->nombre}}</td>
                        <td>
                            <form action="{{ route('procedimientosarchivos.destroy', $archivo->id) }}" method="POST" style="display: inline;">
                                @csrf
                                <input type="hidden" name="procedimiento_id" value="{{$procedimiento->id}}">
                                <button type="submit" style="border: none; background: none; cursor: pointer;">
                                    <i class='bx bxs-trash' style='color:#4C4C4C'></i>
                                </button>
                            </form>
                            <a href="{{ route('procedimientosarchivos.pdf', $archivo->id) }}" target="_blank">
                                <i class='bx bxs-file' style='color:#4C4C4C; '></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            @else
            <div class="alert alert-warning" role="alert">
                No se han encontrado archivos
            </div>
            @endif
        </div>
    </div>
    <div class="col col-sm-12 col-md-6">
        <form id="frmArchivos">
            <div class="card p-3">
                <div class="form__container">
                    <div for="" class="form__title">Archivos</div>
                    <div class="form__item">
                        <label for="ctrl_proceso" class="form-label form__item__title">Proceso</label>
                        <select class="form-select" name="ctrl_proceso" id="ctrl_proceso" required>
                            <option value="0">Seleccione</option>
                            @foreach($procesos as $proceso)
                            <option value="{{$proceso->id}}">{{$proceso->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form__item">
                        <label for="ctrl_archivo" class="form-label form__item__title">Número</label>
                        <input type="file" name="ctrl_archivo" id="ctrl_archivo" class="form-control form__item__input" accept="application/pdf" required>
                    </div>

                </div>

                <div class="mt-2">
                    <button type="button" class="btn btn-primary" id="btnAgregarArchivo">Agregar</button>
                </div>
            </div>
        </form>
    </div>

</div>



@endsection

@section('scripts')
<script>
    procedimiento_id = '{{$procedimiento->id}}';
    urlProceso = "{{ route('procedimientosarchivos.store') }}";
</script>
<script src="{{ asset('public/assets/js/procedimientosadquisiciones/procedimientos.js') }}"></script>
@endsection