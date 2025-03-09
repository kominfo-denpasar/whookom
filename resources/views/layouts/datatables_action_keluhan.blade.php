{!! Form::open(['route' => [$table.'.destroy', $sql->id], 'method' => 'delete']) !!}
<div class='btn-group'>
	<!-- <a href="{{ route($table.'.show', $sql->id) }}" class='btn btn-default btn-sm'>
		<i class="fa fa-eye"></i>
	</a>
	<a href="{{ route($table.'.edit', $sql->id) }}" class='btn btn-default btn-sm'>
		<i class="fa fa-edit"></i>
	</a> -->
	<!-- {!! Form::button('<i class="fa fa-trash"></i>', [
		'type' => 'submit',
		'class' => 'btn btn-danger btn-sm',
		'onclick' => 'return confirm("'.__('crud.are_you_sure').'")'

	]) !!} -->
	<a href="{{url('admin/home-psikolog/konseling/'.$sql->id)}}" class="btn btn-default btn-sm">
		<i class="fas fa-search"></i>
	</a>
	@if($sql->status == 2)
		<a href="{{route('backend.laporan-detail', $sql->id)}}" class="btn btn-secondary btn-sm">
			<i class="fas fa-print"></i>
		</a>
	@endif
</div>
{!! Form::close() !!}