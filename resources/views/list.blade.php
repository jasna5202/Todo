@extends('layouts.app')
@section('content')
@foreach($jobs as $job)

<h4> {{$job->id}}
  {{$job->name}}
  <a href="{{route('tasks.edit',$job->id)}}"> edit</a>
</h4>
<form action="{{route('tasks.destroy',$job->id)}}" method="POST">
  {{ csrf_field() }}
  {{method_field('DELETE')}}
  <input type="submit" value="delete"/>
</form>
@endforeach
<a href="/tasks/create">Add New Task</a>
@endsection
