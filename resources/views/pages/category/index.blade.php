@extends('layouts.global')
@section('content')
    <h1>{{ $page_title }}</h1>
    <!-- basic table -->
    <a class="btn btn-light mb-2" href="{{ url('categories/create') }}">Tambah</a>
    <br>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $category)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a class="btn btn-light" href="{{url('categories/'.$category->id.'/edit')}}">UPDATE</a></td>
                    <td>
                        <form action="{{ route('categories.destroy', [$category->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit"  class="flex btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- basic table -->
@endsection
