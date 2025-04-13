@push('third_party_stylesheets')
    @include('layouts.datatables_css')
@endpush

<div class="card card-primary card-outline">
	<div class="card-body">
		<div class="table-responsive">

			<table id="example" class='table table-striped table-bordered'>
				<thead>
					<tr>
						<th style="width:10%"></th>
						<th>Pushname</th>
                        <th>Content</th>
						<th>Caption</th>
						<th>Type</th>
                        <th>Is Group</th>
                        <th>Created At</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
			<!-- /.table -->
		</div>
		<!-- /.table-responsive -->
	</div>
	<!-- /.card-body -->
	<div class="card-footer">
		<div class="mailbox-controls">
			
			<div class="float-right">
			</div>
			<!-- /.float-right -->
		</div>
	</div>
</div>
<!-- /.card -->

@push('third_party_scripts')

	@include('layouts.datatables_js')
	<script>
		var tb = $('#example').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "{{ route('backend.whatsapp-json') }}",
			"columns": [
				{ data: "aksi", name:"aksi", orderable:false},
				{ data: "pushname", name:"pushname"},
				{ data: "content", name:"content"},
                { data: "caption", name:"caption"},
                { data: "type", name:"type"},
                { data: "is_group", name:"is_group"},
                { data: "created_at", name:"created_at"},
			],
			"language": {
				"lengthMenu": "Tampilkan _MENU_ Data per Halaman",
				"zeroRecords": "Tidak ada Data",
				"info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ total data",
				"infoEmpty": "Tabel kosong",
				"infoFiltered": "(Difilter dari _MAX_ total data)",
				"search": "Pencarian",
				"paginate": {
					"first":      "Pertama",
					"last":       "Terakhir",
					"next":       ">",
					"previous":   "<"
				},
			},
			columnDefs: [{
				"orderable": true,
				"defaultContent": "-", "targets": "_all",
				"targets"  : 'no-sort',
			}],
			//"dom": "ltrip",
			order: [[ 6, "desc" ]]
		});
		// pencarian
		$('#status_filter').on('change', function(){
			var searchText2;
			if($(this).val()=='') {
				searchText2 = '';
			} else {
				//searchText2 = '^' + $(this).val() + '$';
				searchText2 = $(this).val();
			}
			tb.column(1).search(searchText2, true, false, true).draw();   
		});
	</script>
@endpush
