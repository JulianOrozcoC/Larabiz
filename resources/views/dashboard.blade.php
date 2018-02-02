@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listings/create" class="bnt btn-success btn-xs">Add Listing</a></span></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    @if(count($listings))
                    <table class="table table-striped">
                    <tr>
                    <th>Company</th>
                    <th>Website</th>
                    <th>Phone</th>
                    <th></th>
                    <th></th>
                    </tr>
                    @foreach($listings as $listing)
                    <tr>
                    <td>{{$listing->name}}</td>
                    <td>{{$listing->website}}</td>
                    <td>{{$listing->phone}}</td>
                    <td><a class="btn btn-primary" href="/listings/{{$listing->id}}/edit">Edit</a></td>
                    <td>
                    {!! Form::open(['action' => ['ListingsController@destroy', $listing->id], 'method' => 'POST', 'class' => 'pull-left', 'onsubmit' => 'return confirm("Are you sure?")']) !!}
    								  {{ Form::hidden('_method','DELETE') }}
    								  {{ Form::bsSubmit('Delete', ['class' => 'btn bnt-danger']) }}
									  {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
