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
						<th>Psikolog</th>
                        <th>Jadwal</th>
						<th colspan="3">Opsi</th>
					</tr>
				</thead>
				<tbody>
                @foreach($jadwals as $jadwal)
                    <tr>
                        <td>#</td>
                        <td>{{ $jadwal->nama }}</td>
                        <td>{{ $jadwal->hari }}, {{ $jadwal->jam }}</td>
                        <td  style="width: 120px">
                            {!! Form::open(['route' => ['jadwals.destroy', $jadwal->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <!-- <a href="{{ route('jadwals.show', [$jadwal->id]) }}"
                                class='btn btn-default btn-sm'>
                                    <i class="far fa-eye"></i>
                                </a> -->
                                <a href="{{ route('jadwals.edit', [$jadwal->id]) }}"
                                class='btn btn-default btn-sm'>
                                    <i class="far fa-edit"></i>
                                </a>
                                {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer p-0">
		<div class="mailbox-controls">
			
			<div class="float-right">
				@include('adminlte-templates::common.paginate', ['records' => $jadwals])
			</div>
			<!-- /.float-right -->
		</div>
	</div>
</div>
