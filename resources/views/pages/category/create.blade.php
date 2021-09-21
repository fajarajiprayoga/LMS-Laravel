@extends('layouts.global')
@section('content')
    <form class="text-white p-3" action="{{url('categories')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title"> 
        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <button type="submit">Simpan</button>
    </form>
    <a class="btn btn-light" href="{{url('categories')}}">Kembali</a>
@endsection