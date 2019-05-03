@extends('contact.layouts.main')
@section('content')

<div class="container">

    <div class="col-md-9">
        <div class="panel panel-default">
            @if ($contacts->count() > 0)
            <table class="table table-bordered table-border table-stripped text-center">
                <thead >
                    <tr>
                        <th class="text-center">@lang('main.delete')</th>
                        <th class="text-center">@lang('main.edit')</th>
                        <th class="text-center">@lang('main.phone_number')</th>
                        <th class="text-center">@lang('main.name')</th>
                        <th class="text-center"> # </th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($contacts as $contact)                            
                            <tr>
                                    
                                <td>
                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm" type="submit"> <i class="glyphicon glyphicon-trash" ></i> 
                                        </button>
                                    </form>
                                </td>
                                <td><a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning btn-sm" ><i class="glyphicon glyphicon-edit"></i></a></td>
                                <td>{{ $contact->number }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->id }}</td>
                            </tr>
                        @endforeach   
                    </tbody>
                    
                    
                    
                </table>
                @else
                  <h1 class="text-center">@lang('main.no_data')</h1>
                @endif 
        </div>

        <div class="text-center">

            {{ $contacts->links() }}

        </div>
    </div>
    {{-- side menu --}}
</div>
    
@endsection