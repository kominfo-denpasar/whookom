<div class="card card-primary card-outline">
	<div class="card-header">
		<h3 class="card-title">
			&nbsp;
		</h3>

		<div class="card-tools">
			<div class="input-group input-group-sm">
				<input type="text" class="form-control" placeholder="Pencarian">
				<div class="input-group-append">
					<div class="btn btn-primary">
						<i class="fas fa-search"></i>
					</div>
				</div>
			</div>
		</div>
		<!-- /.card-tools -->
	</div>
	<!-- /.card-header -->
	<div class="card-body p-0">
		<div class="table-responsive mailbox-messages">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th></th>
						<th>Nama</th>
						<th>Kontak</th>
						<th>Kecamatan Praktek</th>
						<th>Status</th>
						<th colspan="3">Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($psikologs as $psikolog)
					<tr>
						<td>
							#
						</td>
						<td class="mailbox-subject">{{ $psikolog->nama }}</td>
						<td class="mailbox-subject"><a href="tel:0{{ $psikolog->hp }}">0{{ $psikolog->hp }}</a></td>
						<td class="mailbox-name">{!! App\Http\Controllers\PsikologController::kec($psikolog->kec_id) !!}</td>
						<td class="mailbox-name">
							@if($psikolog->status==0)
								<span class="badge bg-danger">Tidak Aktif</span>
							@else
								<span class="badge bg-success">Aktif</span>
							@endif
						</td>
						<td class="mailbox-attachment">
							{!! Form::open(['route' => ['psikologs.destroy', $psikolog->id], 'method' => 'delete']) !!}
							<div class='btn-group'>
								<a href="{{ route('psikologs.show', [$psikolog->id]) }}"
								class='btn btn-default btn-sm'>
									<i class="far fa-eye"></i>
								</a>
								<a href="{{ route('psikologs.edit', [$psikolog->id]) }}"
								class='btn btn-default btn-sm'>
									<i class="far fa-edit"></i>
								</a>
								{!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Apa Anda yakin?')"]) !!}
							</div>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				
				</tbody>
			</table>
			<!-- /.table -->
		</div>
		<!-- /.mail-box-messages -->
	</div>
	<!-- /.card-body -->
	<div class="card-footer p-0">
		<div class="mailbox-controls">
			
			<div class="float-right">
				@include('adminlte-templates::common.paginate', ['records' => $psikologs])
			</div>
			<!-- /.float-right -->
		</div>
	</div>
</div>
<!-- /.card -->