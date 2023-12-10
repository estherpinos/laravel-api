@extends('admin.home')

@section('content')

<h3 class="text-black">PROJECTS</h3>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Azioni</th>

      </tr>
    </thead>
    <tbody>

        @foreach ( $types as $type )

        <tr>
            <td>{{$type->id}}</td>
            <td>{{$type->title}}</td>
            <td>
                <a href="{{ route('admin.types.show', $type) }}" class="btn btn-warning "><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('admin.types.create', $type) }}" class="btn btn-danger"><i class="fa-solid fa-pencil"></i></a>
            </td>


          </tr>

        @endforeach


    </tbody>
  </table>


@endsection
