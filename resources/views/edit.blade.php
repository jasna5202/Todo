<form action="{{route('tasks.update',$job->id)}}" method="POST">
  {{ csrf_field() }}
  {{method_field('PUT')}}
  <input type="text" name="name" value="{{$job->name}}"/>
    <input type="submit" value="edit"/>

</form>
