@extends('layouts.app')
@section('content')
    <div class="container">
        
            <table class="table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Category</th>
                        <th scope="col"><button class="btn btn-primary"><a href="{{ route('admin.projects.create') }}" class="text-decoration-none text-light">Nuovo post</a></button></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $post)
                    
                    <tr>
                        <td>{{ $post->id}}</td>
                        <td><a href="{{ route('admin.projects.show',$post) }}">{{ $post->title}}</a></td>
                        <td>{{ $post->slug}}</td>
                        <td> {{$post->category ? $post->category->name : ''}}</td>
                        <td> <button class="btn btn-success"><a href="{{ route('admin.projects.edit',$post) }}" class="text-decoration-none text-light">Edit</a></button> </td>
                        <td>
                            <form action="{{ route('admin.projects.destroy',$post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table> 
    </div>
    @endsection
    