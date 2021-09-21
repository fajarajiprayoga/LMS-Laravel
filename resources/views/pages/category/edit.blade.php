@extends('layouts.global')
@section('content')
    <form class="text-white p-3" action="{{url('categories/'.$model->id)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$model->title}}"> 
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{$model->description}}">

        <button type="submit">Simpan</button>
    </form>

    <a class="btn btn-light" href="{{url('categories')}}">Kembali</a>
@endsection