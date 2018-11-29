<div class="container-fluid">
  <div class="">
    <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#myModal"></button>
  <button type="button" class="glyphicon glyphicon-minus"></button>
  <button type="button" class="glyphicon glyphicon-ok"></button>
  <button type="button" class="glyphicon glyphicon-remove"></button>
  </div>

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New PPP Secret</h4>
        </div>
        <div class="modal-body">
          @include('ppp.formsecret')
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>
