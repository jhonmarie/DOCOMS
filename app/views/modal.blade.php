
 <!-- Modal content-->

 
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><img src="{{asset('public/asset/save.png')}}" height="40" width="40">&nbsp </span>Add New Record</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px; background-color:#e5e8e5;">
          <form action="{{ asset('added') }}" method="post" role="form" id="myform" accept-charset="UTF-8">
          <input name="_token" type="hidden" value="yb89NDHLmhTPFoduz2HDZdYzL9IzS5nuE5CFIwfj">
            <div class="form-group">
              <label for="file_no"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>File No.</label>
              <input type="text" class="form-control" name="file_no" placeholder="Enter file number" >
            </div>
            <div class="form-group">
              <label for="for"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>For</label>
              <input type="text" class="form-control" name="for" placeholder="Enter fullname">
            </div>
            <div class="form-group">
              <label for="office"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>Office</label>
              <input type="text" class="form-control" name="office" placeholder="Enter Office">
            </div>
            <div class="form-group">
              <label for="address"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>Address</label>
              <input type="text" class="form-control" name="address" placeholder="Enter address">
            </div>
            <div class="form-group">
              <label for="sub"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>Subject</label>
              <textarea rows="4" cols="50" type="text" class="form-control" name="sub" placeholder="Enter subject...">
            </textarea></div>
            <div class="form-group">
              <label for="rb"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>Received by</label>
              <input type="text" class="form-control" name="rb" placeholder="Enter fullname">
            </div>
              <div class="form-group">
              <label for="dr"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>Date Received</label>
             <input type="text" class="date form-control" name="dr" placeholder="yyyy-mm-dd"></div>
            <script type="text/javascript">  
           $('.date').datepicker({  
           format: 'yyyy-mm-dd'  
           });  
           </script>  
             <div class="form-group">
              <label for="tr"><img src="{{asset('public/asset/eye.png')}}" height="20" width="20">&nbsp</span>Time Received</label> 
          <input id="setTimeExample" type="text" class="time form-control" name="tr" />
               <button id="setTimeButton">Set current time</button>
                    
    <script>
                $(function() {
                    $('#setTimeExample').timepicker();
                    $('#setTimeButton').on('click', function (){
                        $('#setTimeExample').timepicker('setTime', new Date());
                    });
                });
            </script>
            <br><br>
            </div>
               <button type="submit"  class="btn btn-success btn-block"><img src="{{asset('public/asset/submit.png')}}" height="20" width="20">&nbsp</span>Save</button>
          
        </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><img src="{{asset('public/asset/cancel.png')}}" height="20" width="20">&nbsp</span>Cancel</button>
          <button type="submit" name="reset" class="btn btn-default pull-right " ><img src="{{asset('public/asset/reset.png')}}" height="20" width="20">&nbsp</span>Reset</button> 
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 </div>
 </div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#yourModal").modal();
    });
});
</script>
<script>
$(document).ready(function() {  
    $('#myform').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
          file_no: {
                validators: {
                    notEmpty: {
                        message: 'Please enter file number'
                    }
                }
            },
            for: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your full name'
                    }
                }
            },
            office: {
                validators: {
                    notEmpty: {
                        message: 'Please enter office'
                    }
                }
            },
          
            
            address: {
                validators: {
                    notEmpty: {
                        message: 'Please enter address'
                   
                    }
                }
            },   
            sub: {
        
                validators: {
          
                notEmpty: {
                        message: 'Please enter subject'
                    
                    }
                }
            },
           rb: {
        
                validators: {
          
                notEmpty: {
                        message: 'Please enter full name'
                    
                    }
                }
            },
       
        }
        
    });  
});
</script>