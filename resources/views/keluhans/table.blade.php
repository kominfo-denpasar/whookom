<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="keluhans-table">
            <thead>
            <tr>
                <th>Mas Id</th>
                <th>Psikolog Id</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($keluhans as $keluhan)
                <tr>
                    <td>{{ $keluhan->mas_id }}</td>
                    <td>{{ $keluhan->psikolog_id }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['keluhans.destroy', $keluhan->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('keluhans.show', [$keluhan->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('keluhans.edit', [$keluhan->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $keluhans])
        </div>
    </div>
</div>
