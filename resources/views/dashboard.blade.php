@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div >

                    @endif
                    You are logged in!
                    <h3>Your Listing</h3>

                   @if($listings)
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($listings as $listing )
                            <tr>
                                <td>{{$listing->name}}</td>
                            </tr>
                        @endforeach
                    </table>

                    @else
                    <div class="alert alert-danger">
                        <p>You Have no Listing</p>
                    </div >
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
