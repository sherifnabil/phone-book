    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{ route('groups.create') }}" class="list-group-item active text-right">
                    <span class="badge pull-left">+</span> @lang('main.add_group') </a>

                    @foreach ($groups as $group)
                        
                    <li " class="list-group-item text-right">
                        <a class="badge badge-sm badge-info pull-left" href="{{ route('groups.edit', $group->id) }}" ><i class="glyphicon glyphicon-edit"></i></a> 

                                 <form action="{{ route('groups.destroy', $group->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="badge badge-sm badge-danger pull-left" type="submit"> <i class="glyphicon glyphicon-trash" ></i> 
                                        </button>
                                 </form>
                         {{ $group->name }}</li>
                    @endforeach

            </ul>
        </div>
        <!-- /.col-md-3 -->

    </div>