<form action="/tasks" method="POST">
  <input type="text" name="name"/>
    <input type="submit" name="add"/>
    {{ csrf_field() }}
</form>
