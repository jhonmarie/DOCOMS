<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="{{ asset('user_data') }}" method="post">
		<input type="text" name="username" placeholder="Username"><br><br>
		<input type="password" name="password" placeholder="********"><br><br>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>
                        <label><b>File NO</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="file_no" type="text" placeholder="Enter File no" name="file_no" required></div>
                  </div>
               <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Received  by</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="receiveby" type="text" placeholder="Enter Received by" name="receiveby" required></div>
                  </div>
                  <div class="w3-row">
                     <div class="w3-col s4"><label><b>For</b></label></div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="for" type="text" placeholder="Enter Full name" name="for" required>
                     </div>
                  </div>
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Office</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="office" type="text" placeholder="office" name="office" required></div>
                  </div>
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Address</b></label>
                     </div>
                     <div class="w3-col s8">
                        <input class="w3-input w3-border w3-margin-bottom" id="address" type="text" placeholder="address" name="address" required></div>
                  </div>
                  </div>
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Subject</b></label>
                     </div>
                     <div class="w3-col s8">
                      <textarea rows="3" type="subject" class="w3-input w3-border w3-margin-bottom" name="subject" placeholder="Subject" required ></textarea></div>
                  </div>
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Courrier Tracking</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="ctn" type="text" placeholder="Enter Courrier Tracking Number" name="ctn" required></div>
                  </div>
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Representative</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="rep" type="text" placeholder="Enter Representative" name="rep" required></div>
                  </div>
                   <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Remarks</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="remarks" type="text" placeholder="Enter Remarks" name="remarks" required></div>
                  </div>

                  <button class="w3-btn-block w3-indigo w3-section w3-padding" type="submit">Save</button>
               </div>
            </form>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
               <button onclick="document.getElementById('edit').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
            </div>
         </div>
      </div>

  <div id="delete" class="w3-modal">
         <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
               <span onclick="document.getElementById('delete').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <header class="w3-container w3-text-indigo w3-margin-top-64">
               <h1>Delete</h1>
            </header>
            <form class="w3-container" action="{{asset('/delete')}}" method="POST">
              
              <input type="hidden" id="del_id" name="del_id">
               <div class="w3-section">
                  <center><p>Are you sure, you want to delete id : <b><span id ="delete_name"></b></span> ?</p></center>
                  <div class="w3-center"><button type="submit" class="w3-btn w3-indigo"> Delete </button></div>
               </div>
            </form>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
               <button onclick="document.getElementById('delete').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
            </div>
         </div>
      </div>
<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>

<script type="text/javascript">
    $("#grid-basic").bootgrid({
             formatters: {
               "actions": function(column, row)
               {
                 return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-id=\"" + row.id + "\" data-file_no=\"" + row.file_no + "\" data-receiveby=\"" + row.receiveby + "\" data-for=\"" + row.for + "\" data-office=\"" + row.office + "\" data-address=\"" + row.address + "\" data-subject=\"" + row.subject + "\" data-ctn=\"" + row.ctn + "\" data-rep=\"" + row.rep + "\" data-remarks=\"" + row.remarks + "\" class=\"w3-btn w3-blue w3-small edit\"><span class=\"fa fa-pencil\"></span></button> " +
                 "<button onclick=\"document.getElementById('delete').style.display='block'\" data-for=\"" + row.for + "\" data-office=\"" + row.office+ "\" data-id=\"" + row.id + "\" class=\"w3-btn w3-red w3-small delete\"><span class=\"fa fa-remove\"></span></button>";
 
               }
             }});
    $(this).find(".edit").click(function (e) {
                 $('#edit_id').val($(this).data("id"));
                 $('#file_no').val($(this).data("file_no"));
                 $('#receiveby').val($(this).data("receiveby"));
                 $('#for').val($(this).data("for"));
                 $('#office').val($(this).data("office"));
                 $('#address').val($(this).data("address"));
                 $('#subject').val($(this).data("subject"));
                 $('#ctn').val($(this).data("ctn"));
                 $('#rep').val($(this).data("rep"));
                 $('#remarks').val($(this).data("remarks"));
                 
                 
               });
    $(this).find(".delete").click(function (e) {
                 $('#del_id').val($(this).data("id"));
                 $('#delete_name').html($(this).data("id"));
               });
</script>