@extends('master') @section('title', 'Ver Todos los Tickets') @section('content')

    <div class="container col-md-8 mt-10 ">
        <div class="card text-center mt-4">
            <div class="content">
                <h2 class="header">{!! $ticket->title !!}</h2>
                <p><strong>Status</strong> {!! $ticket->status ? 'Pendiente' : 'Respondido' !!}</p>
                <p>{!! $ticket->content !!}</p>
            </div>
            <a href="{!! action('TicketsController@edit', $ticket->slug ) !!}" class="btn btn-info">Editar</a>
            <form action="{!! action('TicketsController@destroy', $ticket->slug ) !!}" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button type="submit" class="btn btn-info">Borrar</button>
            </form>
        </div>
    </div>

@endsection