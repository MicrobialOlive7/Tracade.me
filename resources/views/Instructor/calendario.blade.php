@extends('Instructor.templates.master')
@section('cal-active', 'active')
@section('content')

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"> </div>
    <div class="container-fluid mt--7">
        <!-- Table -->
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Calendario</h3>
                        <div class="col text-right">
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-info btn-sm" role="button" title="Agregar" href="{{ url('AgregarEventos') }}">
                                    <i class="ni ni-fat-add" ></i>
                                </a>
                            </span>
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-default btn-sm" role="button" title="Modificar" href="{{ url('ModificarEventos') }}">
                                    <i class="ni ni-bold-down" ></i>
                                </a>
                            </span>
                            <span class="btn-inner--icon">
                                <a class="btn btn-icon btn-2 btn-danger btn-sm" role="button" title="Eliminar" href="{{ url('EliminarEventos') }}">
                                    <i class="ni ni-fat-remove" ></i>
                                </a>
                            </span>
                        </div>
                        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;ctz=America%2FMexico_City&amp;src=MWg1Yzc0YTd2Y2NtdmY5aGwyb211NmFqZ2tAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%2330487E&amp;showTitle=0&amp;showNav=1&amp;showDate=1&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=0&amp;showTz=0&amp;mode=MONTH" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                    </div>
            </div>
        </div>
    </div>
    </div>
@endsection

