@extends('master') @section('title', 'Contact') @section('content')
<div class="container col-md-8 mt-10 ">
    <div class="card text-center mt-4 ">
        <div class="card-header">
            ENVIAR UN NUEVO TICKET
        </div>
        <div class="card-body">
            <form method="post">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label">Titulo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" placeholder="Título" name='title'value="{!! $ticket->title !!}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2 col-form-label">Contenido</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3" id="content" name='content'>{!! $ticket->content !!}</textarea>
                        
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="status" id="status" {!! $ticket->status?"": "checked" !!} >
                    <label class="form-check-label" for="status">
                        Cerrar Ticket
                    </label>
                </div>
                <br>

                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach


                <div class="form-group row">
                    <div class="col-sm-10">
                        <button class="btn btn-default">Cancelar</button>
                        <button type="submit" class="btn btn-warning">Enviar</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
