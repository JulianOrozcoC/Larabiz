@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing<span class="pull-right"><a href="/dashboard" class="bnt btn-info btn-xs">Back</a></span></div>

                <div class="panel-body">
                  {!! Form::open(['action' => 'ListingsController@store', 'method' => 'POST']) !!}
    								{{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
										{{ Form::bsText('website','',['placeholder' => 'Company Website']) }}
										{{ Form::bsText('email','',['placeholder' => 'Company Email']) }}
										{{ Form::bsText('phone','',['placeholder' => 'Company Phone']) }}
										{{ Form::bsText('address','',['placeholder' => 'Business Address']) }}
    								{{ Form::bsTextArea('bio','',['placeholder' => 'About this Business']) }}
    								{{ Form::bsSubmit('submit',['class' => 'btn bnt-primary']) }}
									{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection