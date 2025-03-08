<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="blogs-table">
            <thead>
            <tr>
                <th>Judul</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $blog->judul }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['blogs.destroy', $blog->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <!-- <a href="{{ route('blogs.show', [$blog->id]) }}"
                               class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> -->
                            <a href="{{ route('blogs.edit', [$blog->id]) }}"
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

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $blogs])
        </div>
    </div>
</div>
