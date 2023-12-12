@extends('admin.home')

@section('content')
<h1>Inserimento nuovo proggetto</h1>

<div class="row">
    <div class="col-8">

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        @csrf
        <form action="{{route('admin.technologies.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>


            {{-- BUTTONS --}}
            <button type="submit" class="btn btn-primary">Send</button>
            <button type="reset" class="btn btn-secondary">Delete</button>

        </form>




    </div>
</div>


@endsection
