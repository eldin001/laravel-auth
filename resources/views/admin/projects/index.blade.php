@extends('layouts.admin')
@section('content')
 <section>
    <h1>Projects</h1>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">SLUG</th>
      <th scope="col">CREATED AT </th>
      <th scope="col">UPDATED AT</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($projects as $project)
    <tr>
      <td>{{$project->id}}</td>
      <td>{{$project->title}}</td>
      <td>{{$project->slug}}</td>
      <td>{{$project->created_at}}</td>
      <td>{{$project->updated_at}}</td>
      <td>View-edit-delete</td>
    </tr>
    @endforeach
  </tbody>
</table>
 </section>
@endsection