<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="psikologs-table">
            <thead>
            <tr>
                <th>Nik</th>
                <th>Nama</th>
                <th>Hp</th>
                <th>User Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($psikologs as $psikolog)
                <tr>
                    <td>{{ $psikolog->nik }}</td>
                    <td>{{ $psikolog->nama }}</td>
                    <td>{{ $psikolog->hp }}</td>
                    <td>{{ $psikolog->user_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['psikologs.destroy', $psikolog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('psikologs.show', [$psikolog->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('psikologs.edit', [$psikolog->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $psikologs])
        </div>
    </div>
</div>
