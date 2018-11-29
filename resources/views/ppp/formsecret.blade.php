
<form action="ppp/secret/add" method="post">

  {{ csrf_field() }}
  <div class="form-group">
    <div class="container">
      <div class="row">
        <div class="col-sm-1">
            <label for="name">Name</label>
        </div>
            <div class="col-sm-3">
              <input type="text" name="name" value="" class="form-control form-control-sm">
            </div>
            <div class="col-sm-1">
              <input class="btn btn-primary" type="submit" value="OK">
            </div>
      </div>
      <br>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-1">
            <label for="">Password</label>
          </div>
          <div class="col-sm-3">
            <input type="password" name="password" value="" class="form-control">
          </div>

          <div class="col-sm-2">
          <input class="btn btn-primary" type="reset" value="Reset">
          </div>
        </div>


      </div>

      <br>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-1">
            <label for="">Services</label>
          </div>
          <div class="col-sm-3">
            <input type="text" name="services" value="" class="form-control">
          </div>
        </div>


      </div>


      <br>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-1">
            <label for="">Called ID</label>
          </div>
          <div class="col-sm-3">
            <input type="text" name="calledid" value="" class="form-control">
          </div>
        </div>


      </div>

      <br>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-1">
            <label for="">Profile</label>
          </div>
          <div class="col-sm-3">
            <input type="text" name="profile" value="" class="form-control">
          </div>
        </div>


      </div>

      <br>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-1">
            <label for="">Local Address</label>
          </div>
          <div class="col-sm-3">
            <input type="text" name="localaddress" value="" class="form-control">
          </div>
        </div>


      </div>

      <br>
      <div class="row">
        <div class="form-group">
          <div class="col-sm-1">
            <label for="">Remote Address</label>
          </div>
          <div class="col-sm-3">
            <input type="text" name="remoteaddress" value="" class="form-control">
          </div>
        </div>


      </div>

    </div>
  </div>

</form>
