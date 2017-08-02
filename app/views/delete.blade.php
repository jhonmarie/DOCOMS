@extends('edit')
@section('content')
<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Delete</h4>

				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" style="display: none;">
			
					<div class="deleteContent">
						Are you Sure you want to delete <span class="dname"></span> ? <span
							class="hidden did"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn actionBtn" data-dismiss="modal">
							<span id="footer_action_button" class='glyphicon'> </span>
						</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							<span class='glyphicon glyphicon-remove' aria-hidden="true"></span> Close
						</button>
					</div>
				</div>
			</div>


     

    @endsection