@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing<span class="pull-right"><a href="/dashboard" class="bnt btn-info btn-xs">Back</a></span></div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingsController@update', $listing->id], 'method' => 'POST']) !!}
    								{{ Form::bsText('name',$listing->name,['placeholder' => 'Company Name']) }}
										{{ Form::bsText('website',$listing->website,['placeholder' => 'Company Website']) }}
										{{ Form::bsText('email',$listing->email,['placeholder' => 'Company Email']) }}
										{{ Form::bsText('phone',$listing->phone,['placeholder' => 'Company Phone']) }}
										{{ Form::bsText('address',$listing->address,['placeholder' => 'Business Address']) }}
    						    {{ Form::bsTextArea('bio',$listing->bio,['placeholder' => 'About this Business']) }}
                    {{ Form::hidden('_method', 'PUT') }}
    							  {{ Form::bsSubmit('submit',['class' => 'btn bnt-primary']) }}
									{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection