

<style>
.data-table-container {
  padding: 10px;
}

.dt-buttons .btn {
  margin-right: 3px;
}

</style>
<a class="btn btn-default buttons-print" tabindex="0" aria-controls="DataTables_Table_0"><span><i class="fa fa-print"></i> Print</span></a>
<a class="btn btn-default buttons-pdf buttons-html5" tabindex="0" aria-controls="DataTables_Table_0"><span><i class="fa fa-file-pdf-o"></i> PDF</span></a>
<div id="DataTables_Table_0_filter" class="dataTables_filter">
<label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>


<h1>Print test</h1>
<div class="data-table-container">
  <table class="table table-hover table-striped table-bordered data-table">
    <thead>
      <tr>
        <th class="text-right">No.</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-right">1</td>
        <td>Name 1</td>
      </tr>
      <tr>
        <td class="text-right">2</td>
        <td>Name 2</td>
      </tr>
    </tbody>
    <tfoot>
				<tr>
					<td colspan="2" class="text-center">footer text</td>
				</tr>
			</tfoot>
  </table>
</div>

<script>
$('table.data-table').DataTable({
  paging: false,
  columnDefs: [{
    targets: 'no-sort',
    orderable: false
  }],
  dom: '<"row"<"col-sm-6"Bl><"col-sm-6"f>>' +
    '<"row"<"col-sm-12"<"table-responsive"tr>>>' +
    '<"row"<"col-sm-5"i><"col-sm-7"p>>',
  fixedHeader: {
    header: true
  },
  buttons: {
    buttons: [{
      extend: 'print',
      text: '<i class="fa fa-print"></i> Print',
      title: $('h1').text(),
      exportOptions: {
        columns: ':not(.no-print)'
      },
      footer: true,
      autoPrint: false
    }, {
      extend: 'pdf',
      text: '<i class="fa fa-file-pdf-o"></i> PDF',
      title: $('h1').text(),
      exportOptions: {
        columns: ':not(.no-print)'
      },
      footer: true
    }],
    dom: {
      container: {
        className: 'dt-buttons'
      },
      button: {
        className: 'btn btn-default'
      }
    }
  }
});

</script>



