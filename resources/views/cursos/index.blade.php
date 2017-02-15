@extends('layouts/principal');

@section('content')


<div class="row">
  <div class="col-md-6">

        <h1>Cursos</h1>

        <ul class="list-group">
          @foreach ($cursos as $curso)
            <li class="list-group-item">{{$curso}} </li>
          @endforeach
        </ul>

    </div>
</div>

@endsection

{{--
//class="col-md-6"
<table class="table table-striped">

  <h1>Cursos</h1>

  <ul class="list-group">
    @foreach ($cursos as $curso)
      <li class="list-group-item"> {{$curso}} </li>
    @endforeach
  </ul>
</table> --}}
