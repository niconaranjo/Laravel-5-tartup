@extends('master')
@section('title', 'Ver Todos los Tickets')
@section('content')

    <div class="container col-md-8 mt-10 ">
            <div class="card text-center mt-4">
                <div class="card-heading">
                    <h2> Tickets </h2>
                </div>
                @if ($tickets->isEmpty())
                    <p> No hay Tickets.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tickets as $ticket)
                                <tr>
                                    <td>{!! $ticket->id !!} </td>
                                    <td>{!! $ticket->title !!}</td>
                                    <td>{!! $ticket->status ? 'Pendiente' : 'Respondido' !!}</td>
                                    <td><a href="{!! action('TicketsController@show', $ticket->slug ) !!}" class="btn btn-info">Ver</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
    </div>

@endsection