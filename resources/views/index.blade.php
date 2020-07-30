@extends('master')
@section('content')
<div class="container"><br>
<center><h1>Car Information</h1></center><br>
<h6 class="text-center text-success">{{ Session::get('message') }}</h6>
<!-- Button to Open the Modal -->
<a href="#" class="btn btn-success" style="color: white" data-toggle="modal" data-target="#myModal">Add Information</a><br><br>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Car Information</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

<!-- Modal body -->
<div class="modal-body">
    <form action="/cars" method="post">
    @csrf
    <div class="form-group">
    <label for="text">Car Name</label>
    <input type="text" class="form-control" placeholder="Car Name"  name="name">
    </div>
    <div class="form-group">
    <label for="text">Brand</label>
    <input type="text" class="form-control" placeholder="Brand"  name="brand">
    </div>
    <div class="form-group">
    <label for="text">Year</label>
    <input type="text" class="form-control" placeholder="Year"  name="year">
    </div>
    
  <button type="submit" class="btn btn-primary" >Submit</button>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Year</th>
      </tr>
    </thead>
    <tbody>
        @foreach($allcars as $allcar)
        <tr>
        <td>{{$allcar->name}}</td>
        <td>{{$allcar->brand}}</td>
        <td>{{$allcar->year}}</td>
      </tr>
    
      @endforeach
    </tbody>
  </table>

</div>
@endsection