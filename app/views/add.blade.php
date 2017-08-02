@extends('Welcome')
@section('content')


    <!-- modal for signup  -->
    <div class="modal fade add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Add Information</h4>
          </div>
            <div class="modal-body">
              <div id="form-signup">
                <div class="form-group">
                  <input type="text" name="for"  placeholder="For (Enter Full Name)" class="form-control input-lg" />
                </div>
                <div class="form-group">
                  <input type="text" name="office"  placeholder="Office" class="form-control input-lg" />
                </div>
                <div class="form-group">
                  <input type="text" name="address"  placeholder="Address" class="form-control input-lg" />
                </div>
                <div class="form-group">
                  <input type="textarea" name="sub"  placeholder="Subject" class="form-control input-lg" />
                </div>
               <div class="form-group">
                  <input type="text" name="rb"  placeholder="Receive by" class="form-control input-lg" />
                </div>
              </div>
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" name="register" >Register</button>
              </div>
      </div>
    </div>

    @endsection