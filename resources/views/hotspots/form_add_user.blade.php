@extends('layouts')
@section('content')
<br>


<div class="container-fluid">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-7">
    <div class="panel panel-primary">

      <div class="panel-heading">Hotspot User</div>
      <div class="panel-body">
        <form class="" action="{{ url('/hotspot/create-user')}}" method="post">
          {{ csrf_field() }}
              <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
              </div>

              <div class="form-group">
                  <label for="name">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="">Profile</label>
                  </div>
                  <div class="col">
                    <select class="custom-select col-sm-3">
                          <option selected>Default</option>
                          <option value="">Full</option>

                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md pull-right">
                  <button type="submit"  class="btn btn-primary" name="AddUser">Create User</button>
                </div>
              </div>

        </form>
      </div>

    </div>
  </div>
  </div>



@endsection
