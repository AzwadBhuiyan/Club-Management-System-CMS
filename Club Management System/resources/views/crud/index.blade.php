<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Chess Club new user</title>
</head>
<body>

<div class = "he">Add new user</div>


<div class = "container">

@if(Session::get('success'))
    <div class = "alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::get('fail'))
    <div class = "alert alert-danger">
        {{ Session::get('fail') }}
    </div>
@endif



<form action="add" method="post"> 

@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">IUB ID</label>
    <input name = "id" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input name = "name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input name = "email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Contact Number</label>
    <input name = "contact" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Gender</label>
    <select name = "gender" class="form-control" id="exampleFormControlSelect1">
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Club Postion</label>
    <select name = "position" class="form-control" id="exampleFormControlSelect1">
      <option>Normal</option>
      <option>Vice-President</option>
      <option>Treasurer</option>
      <option>President</option>
    </select>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button name = "submit" type="submit" class="btn btn-primary">Add User</button>
    </div>
  </div>

</form>

<br>

<table class = "table table-hover">
  <thread>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Contact</th>
    <th>Gender</th>
    <th>Position</th>
    <th>Actions</th>
  </thread>
  <tbody>

    @foreach ($list as $item)
    <tr>
      <td>{{ $item->id }}</td>
      <td>{{ $item->name }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->contact }}</td>
      <td>{{ $item->gender }}</td>
      <td>{{ $item->position }}</td>
      <td>
        <div class = "btn-group">
          <a href="edit/{{ $item->id }}" class="btn btn-primary btn-xs">Edit</a>
          <a href="delete/{{ $item->id }}" class="btn btn-danger btn-xs">Delete</a>
        </div>
      </td>
    </tr>
    @endforeach
    
  </tbody>
  

</table>

</div>
</body>
</html>