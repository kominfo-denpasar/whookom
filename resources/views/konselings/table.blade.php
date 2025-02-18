<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="konselings-table">
            <thead>
            <tr>
                <th>Status</th>
                <th>Psikolog Id</th>
                <th>Mas Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($konselings as $konseling)
                <tr>
                    <td>{{ $konseling->status }}</td>
                    <td>{{ $konseling->psikolog_id }}</td>
                    <td>{{ $konseling->mas_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['konselings.destroy', $konseling->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('konselings.show', [$konseling->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('konselings.edit', [$konseling->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $konselings])
        </div>
    </div>
</div>
