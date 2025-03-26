@extends('layouts.plantilla')
@section('title','Procedimientos administrativos')
@section('content')
<nav class="navbar border-bottom" data-bs-theme="dark">
    <span>Procedimientos administrativos</span>
</nav>
    <div class="d-flex justify-content-between col col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-3 mt-2 mb-3">
        <div>
            <a class="btn btn-sm btn-success mb-2" href="{{route('procedimientos.create')}}">Crear registro</a>
        </div>
        <div>
            <a class="btn btn-sm btn-secondary" href="{{route('home')}}">Volver al Inicio</a>
        </div>
    </div>

    <table id="procedimientosTable" class="table table-light align-middle table-hover table-sm table-borderless tabla_procedimientos">
        <thead class="table-dark">
            <tr>
                <th>Número</th>
                <th>Procedimiento Admvo</th>
                <th>Descripcion</th>
                <th>Fecha</th> <!-- Correo/telefono -->
                <th></th> <!-- Botones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($procedimientos as $procedimiento)
                <tr>
                    <td> <!-- Número -->
                        <div>
                            {{ $procedimiento->numero }}
                        </div>
                    </td>
                    <td> <!-- Procedimiento admvo -->
                        <div>
                            {{$procedimiento->catalogo->nombre}}
                        </div>
                    </td>

                    <td> <!-- Descripcion -->
                        <div>
                            {{ $procedimiento->descripcion }}
                        </div>
                    </td>
                    <td> <!-- Nombre -->
                        <div>
                            {{ $procedimiento->fecha->format('d-m-Y') }}
                        </div>
                    </td>

                    <td class="d-flex flex-rows"> <!-- Botón Actualizar -->
                        <a href="{{route('procedimientos.edit',$procedimiento->id)}}">
                            <i class='bx bxs-edit-alt' style='color:#4C4C4C'  ></i>
                        </a>
                        <a href="{{route('procedimientosarchivos.create',$procedimiento->id)}}">
                            <i class='bx bxs-file-blank' style='color:#4C4C4C'  ></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
    
@section('scripts')
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            var tabla = $('#procedimientosTable');
            var dt = tabla.DataTable({
                language: {
                    "processing": 'Procesando...',
                    "lengthMenu": 'Mostrar _MENU_ registros',
                    "zeroRecords": 'No se encontraron resultados',
                    "emptyTable": 'Ningún dato disponible en esta tabla',
                    "info": 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
                    "infoEmpty": 'Mostrando registros del 0 al 0 de un total de 0 registros',
                    "infoFiltered": '(filtrado de un total de _MAX_ registros)',
                    "search": 'Buscar:',
                    "paginate": {
                        "first": 'Primero',
                        "last": 'Último',
                        "next": 'Siguiente',
                        "previous": 'Anterior'
                    },
                },
                processing: true,
                responsive: true,
                order: [[1, 'desc']], // Ordenar por la primera columna de forma descendente
            });
            
            //dt.columns.adjust().draw();
        });
    </script>
@stop