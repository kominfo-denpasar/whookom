<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="dasshasils-table">
            <thead>
            <tr>
                <th>Mas Id</th>
                <th>Nilai D</th>
                <th>Nilai S</th>
                <th>Nilai A</th>
                <th>Hasil Akhir</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($dasshasils as $dasshasil)
                <tr>
                    <td>{{ $dasshasil->mas_id }}</td>
                    <td>{{ $dasshasil->nilai_d }}</td>
                    <td>{{ $dasshasil->nilai_s }}</td>
                    <td>{{ $dasshasil->nilai_a }}</td>
                    <td>{{ $dasshasil->hasil_akhir }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['dasshasils.destroy', $dasshasil->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('dasshasils.show', [$dasshasil->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('dasshasils.edit', [$dasshasil->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $dasshasils])
        </div>
    </div>
</div>
