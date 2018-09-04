@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif
    {!! Form::open(['route' => 'trainers.store', 'method' => 'POST', 'files' => true])!!}
        @include('trainers.form')

    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close()!!}

    {{--  <form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <div class="form-group">
            <label for="">Descripción</label>
            <input type="text" name="descrip">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>  --}}
@endsection
