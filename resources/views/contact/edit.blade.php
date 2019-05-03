@extends('contact.layouts.main') 
@section('content')
<div class="container">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading text-right">
                <strong>@lang('main.add_contact')</strong>
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="row">
                        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-1">
                                    @include('contact.layouts.message')
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-1">
                                    <input type="text" value="{{ $contact->name }}" name="name" id="name" class="form-control">
                                </div>
                                <label for="name" class="control-label col-md-1">@lang('main.name')</label>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-1">
                                    <input type="text" value="{{ $contact->number }}" name="number" class="form-control">
                                </div>
                                <label for="number" class="control-label col-md-1">@lang('main.contact')</label>
                            </div>

                            
                            <div class=" col-sm-9 col-sm-offset-1">

                                <input type="submit" class="btn btn-primary btn-bg " value="{{ __('main.save') }}">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection