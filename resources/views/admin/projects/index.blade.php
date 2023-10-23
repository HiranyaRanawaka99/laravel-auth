@extends('layouts.app')

@section('content')

@foreach($projects as $project)
<h1> {{ $project->title }} </h1>
@endforeach

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @forelse($projects as $project)
      <tr>
        <th scope="row"> {{ $project->id}} </th>
        <td> </td>
        <td></td>
        <td></td>
      </tr>
      @empty
      @endforelse
      <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <th scope="row"></th>
        <td colspan="2"></td>
        <td></td>
      </tr>
    </tbody>
  </table>



@endsection