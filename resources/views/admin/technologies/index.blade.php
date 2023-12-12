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

        @foreach ( $technologies as $technology )

        <tr>
            <td>{{$technology->id}}</td>
            <td>{{$technology->title}}</td>
            <td>
                <a href="{{ route('admin.technlogoies.show', $technology) }}" class="btn btn-warning "><i class="fa-solid fa-eye"></i></a>
                <a href="{{ route('admin.technlogoies.edit', $technology) }}" class="btn btn-danger"><i class="fa-solid fa-pencil"></i></a>
            </td>


          </tr>

        @endforeach


    </tbody>
  </table>


@endsection
