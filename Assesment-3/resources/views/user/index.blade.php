@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a href="/users/create" class="btn btn-success mb-3 float-right"><i class="bi bi-plus-circle"></i></a>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                @foreach($users as $user)
                <tbody>
                    @if($user->age == "")
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>
                        <a href="/users/{{ $user->id }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                        <form action="/users/{{ $user->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are You Sure to Delete?')">
                            <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @else
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->age }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>
                        <a href="/users/{{ $user->id }}/edit" class="btn btn-warning"><i class="bi bi-pen"></i></a>
                        <form action="/users/{{ $user->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" onclick="return confirm('Are You Sure to Delete?')">
                            <i class="bi bi-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @endif
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection