@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"> <a href="/dashboard" class="btn btn-primary btn-xs">Go Back</a>
                 </span> </div>

               <div class="panel-body">
                {!! Form::open(['action' => ['ListingController@update',$listing->id], 'method'=>'POST',]) !!}
                    {{ Form::bsText('name',$listing->name,['Placeholder'=>'Company name']) }}
                    {{ Form::bsText('website',$listing->website,['Placeholder'=>'website Url']) }}
                    {{ Form::bsText('email',$listing->email,['Placeholder'=>'Contact email']) }}
                    {{ Form::bsText('phone',$listing->phone,['Placeholder'=>'Contact phone']) }}
                    {{ Form::bsText('address',$listing->address,['Placeholder'=>'Company address']) }}
                    {{ Form::bsTextarea('bio',$listing->bio,['Placeholder'=>'About this Company']) }}
                    {{Form::hidden('_method','PUT')}}
                    {{ Form::bsSubmit('Submit', ['class'=>'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>


    </div>

@endsection
