@extends('contact.layouts.main') 
@section('content')

<div class="container">

    <div class="col-md-9">
        <div class="panel panel-default">
            <table class="table">
                @foreach ($contacts as $item)

                    <tr>
                        <td width="100" class="middle">
                            <div>
                                <a href="{{ route('contacts.edit', $item->id) }}" class="btn btn-circle btn-default btn-xs">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </a>
                                <form action="{{ route('contacts.destroy', $item->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-circle btn-danger btn-xs">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                        <td class="pull-right text-right">
                            <div class="media">
                                <div class="pull-right">
                                    <a href="#">
                                            <img class="media-object" src="http://placehold.it/100x100" alt="...">
                                            </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"> {{ $item->name }} :@lang('main.contact_no')</h4>
                                    <address>
                                            <strong>{{ $item->number }} :@lang('main.contact')</strong><br>
                                            
                                            </address>
                                </div>
                            </div>
                        </td>
                    </tr>       
                @endforeach
            </table>
        </div>                

        <div class="text-center">

            {{ $contacts->links() }}

        </div>
    </div>
    {{-- side menu --}}
</div>
@endsection