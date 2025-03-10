@push('third_party_stylesheets')
    @include('layouts.datatables_css')
@endpush

<div class="card">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class='table table-striped table-bordered'>
				<thead>
					<tr>
						<th style="width:10%"></th>
						<th>Judul</th>
						<th>Tanggal</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>

		<div class="card-footer clearfix">
			<div class="float-right">
				<!-- @include('adminlte-templates::common.paginate', ['records' => $blogs]) -->
			</div>
		</div>
	</div>
</div>

@push('third_party_scripts')

	@include('layouts.datatables_js')
	<script>
		var tb = $('#example').DataTable({
			"processing": true,
			"serverSide": true,
			"ajax": "{{ route('backend.blog-json') }}",
			"columns": [
				{ data: "aksi", name:"aksi", orderable:false},
				{ data: "judul", name:"judul"},
				{ data: "tanggal", name:"created_at"},
				{ data: "status", name:"status"},
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
			order: [[ 3, "desc" ]]
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