@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Business Listing</a>
                 </span> </div>

                <div class="panel-body">

                   @if($listings)
                      <ul class="list-group">
                        @foreach($listings as $listing )
                         <li class="list-group-item"><a href="/listings/{{$listing->id}}">{{$listing->name}}</a> </li>

                      </ul>
                        @endforeach
                    </table>

                    @else
                    <div class="alert alert-danger">
                        <p>No Listing found</p>
                    </div >
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
