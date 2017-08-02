
 <!-- Modal content-->

 <div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header" style="padding:35px 50px;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>

				</div>
				<div class="modal-body" style="padding:40px 50px; background-color:#e5e8e5;">
      
					<form action="{{ asset('/editItem') }}" method="post" class="form-horizontal" role="form">
					
						<div class="form-group">
							<label class="control-label col-sm-2" for="for">For</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="for">
							</div>
						</div>
						<p class="for_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="office">Office</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="office">
							</div>
						</div>
						<p class="loffice_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="address">Address</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="address">
							</div>
						</div>
						<p class="address_error error text-center alert alert-danger hidden"></p>
			
						<div class="form-group">
							<label class="control-label col-sm-2" for="subject">Subject</label>
							<div class="col-sm-10">
								<textarea type="text" class="form-control" id="subject"></textarea>
							</div>
						</div>
						<p class="subject_error error text-center alert alert-danger hidden"></p>
						<div class="form-group">
							<label class="control-label col-sm-2" for="receiveby">Receiveby </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="receiveby">
							</div>
						</div>
						<p class="receiveby_error error text-center alert alert-danger hidden"></p>
				</div>
           <div class="modal-footer">

		   <button type="button" name="Update" class="btn actionBtn btn-success edit" data-dismiss="modal">
							<span id="footer_action_button" class="fa fa-check" > Update</span>
						</button>
           
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><img src="{{asset('public/asset/cancel.png')}}" height="20" width="20">&nbsp</span>Cancel</button>
            </form>

</div>

 <script>
 $(document).on('click', '.edit-modal', function() {
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('fa-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').removeClass('delete');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit Record');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        var stuff = $(this).data('info').split(',');
        fillmodalData(stuff)
        $('#myModal').modal('show');
    });

    function fillmodalData(details){
    $('#id').val(details[0]);
    $('#for').val(details[1]);
    $('#office').val(details[2]);
    $('#address').val(details[3]);
    $('#subject').val(details[4]);
    $('#receiveby').val(details[5]);
   
}

     $('.modal-footer').on('click', '.edit', function() {
        $.ajax({
            type: 'post',
            url: '/editItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $("#id").val(),
                'for': $('#for').val(),
                'office': $('#office').val(),
                'address': $('#address').val(),
                'subject': $('#subject').val(),
                'receiveby': $('#receiveby').val()
                
            },
            success: function(data) {
                if (data.errors){
                    $('#myModal').modal('show');
                    if(data.errors.for) {
                        $('.for_error').removeClass('hidden');
                        $('.for_error').text("Full name can't be empty!");
                    }
                    if(data.errors.office) {
                        $('.office_error').removeClass('hidden');
                        $('.office_error').text("Office can't be empty !");
                    }
                    if(data.errors.address) {
                        $('.address_error').removeClass('hidden');
                        $('.address_error').text("Address can't be empty!");
                    }
                    if(data.errors.subject) {
                        $('.subject_error').removeClass('hidden');
                        $('.subject_error').text("Subject can't be empty!");
                    }
                    if(data.errors.receiveby) {
                        $('.receiveby_error').removeClass('hidden');
                        $('.receiveby_error').text("Full name can't be empty!");
                    }
                }
                 else {
                     
                     $('.error').addClass('hidden');
                $('.item' + data.id).replaceWith("<tr class='item" + data.id + "'><td>" +
                        data.id + "</td><td>" + data.for +
                        "</td><td>" + data.office + "</td><td>" + data.address+ "</td><td>" +
                         data.subject + "</td><td>" + data.receiveby + "</td><td>" + 
                          "</td><td><button class='edit-modal btn btn-info' data-info='" + data.id+","+data.for+","+data.office+","+data.address+","+data.subject+","+data.receiveby+"'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-info='"  + data.id+","+data.for+","+data.office+","+data.address+","+data.subject+","+data.receiveby+"' ><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
 
                 }}
        });
    });
     
    </script>

 