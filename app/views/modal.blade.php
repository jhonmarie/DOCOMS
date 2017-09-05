@extends('welcomes')
@section('content')


<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>
        <script src="http://demo.expertphp.in/js/bootstrap.js"></script>
<script src="http://demo.expertphp.in/js/validator.js"></script>
<script type="text/javascript" src="{{asset('public/asset/js/bootstrap-clockpicker.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('public/asset/css/bootstrap-clockpicker.min.css')}}">
 <!-- Modal content-->

 <style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
  .bs-example{
      margin: 20px;
    }
    .inner-addon { 
    position: relative; 
}
/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }
</style>
<br><br>


 <div class="register-box">
    @if (Session::get('msg') == 'ad')
    <div class="alert alert-info alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Success</h4>
    </div>    
    @elseif (Session::get('msg') == 'fa')
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Failed</h4>
    </div>
    @endif 


<div class="bs-example">
    <center><h1>Add New Record</h1></center>
    <form class="form-horizontal" method="POST" id="myform" action="{{ asset('added') }}" accept-charset="UTF-8">
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="file_no">File NO:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="file_no" placeholder="Enter File Number">
                <span class="form-control-feedback"></span>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="rb">Received by:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="rb" placeholder="Enter Fullname">
            </div>
        </div>
       
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="for">For:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="for" placeholder="Enter Fullname">
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="office">Office:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="office" placeholder="Enter Office">
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="address">Address:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="address" placeholder="Enter Address">
            </div>
        </div>
         
          <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="sub">Subject:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" name="sub" placeholder="Subject"></textarea>
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="ctn">Courier Tracking No:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="ctn" placeholder="Enter Tracking No">
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="rep">Representative</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="rep" placeholder="Enter Representative">
            </div>
        </div>
        <div class="form-group has-feedback">
            <label class="control-label col-xs-3" for="remarks">Remarks:</label>
            <div class="col-xs-9">
                <textarea rows="3" class="form-control" name="remarks" placeholder="Remarks"></textarea>
            </div>
        </div>
       <div class="form-group has-feedback">
            <label class="control-label col-xs-3">Date/Time Received:</label>
            <div class="col-xs-3">
               <div class="form-group inner-addon left-addon">
               <i class="glyphicon glyphicon-calendar"></i>
                <input type="text" class="date form-control" name="dr" placeholder="Choose Date yyyy-mm-dd">
            </div>
        </div> 
        <script type="text/javascript">  
           $('.date').datepicker({  
           format: 'yyyy-mm-dd'  
           });  
           </script>
            <div class="col-xs-3">
            <div class="form-group inner-addon left-addon">
               <i class="glyphicon glyphicon-time"></i>
            <input class="form-control" id="single-input" name="tr" value="" placeholder="Now">
<button type="button" id="check-minutes">Check the minutes</button>

<script type="text/javascript">
var input = $('#single-input').clockpicker({
    placement: 'bottom',
    align: 'left',
    autoclose: true,
    'default': 'now'
});

// Manually toggle to the minutes view
$('#check-minutes').click(function(e){
    // Have to stop propagation here
    e.stopPropagation();
    input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
});
</script>
            </div>
        </div>
       
         <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>
</div>


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
            // office: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please enter office'
            //         }
            //     }
            // },
          
            
            // address: {
            //     validators: {
            //         notEmpty: {
            //             message: 'Please enter address'
                   
            //         }
            //     }
            // },   
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
            //  ctn: {
        
            //     validators: {
          
            //     notEmpty: {
            //             message: 'Please enter ctn'
                    
            //         }
            //     }
            // },
            //  rep: {
        
            //     validators: {
          
            //     notEmpty: {
            //             message: 'Please enter representative'
                    
            //         }
            //     }
            // },
            //  remarks: {
        
            //     validators: {
          
            //     notEmpty: {
            //             message: 'Please enter remarks'
                    
            //         }
            //     }
            // },
            // tr: {
        
            //     validators: {
          
            //     notEmpty: {
            //             message: 'Please enter  received time'
                    
            //         }
            //     }
            // },
            // dr: {
        
            //     validators: {
          
            //     notEmpty: {
            //             message: 'Please enter received date'
                    
            //         }
            //     }
            // },
       
        }
        
    });  
});
</script>



@endsection