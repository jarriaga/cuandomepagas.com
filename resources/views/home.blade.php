@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Lista de deudores </div>
                <div class="panel-body">
                    <div class="review-block">
                        @foreach($complaints as $complaint)
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{   \App\Http\Controllers\Images\ComplaintImage::getUrl( $complaint->photo )}}"
                                         class="img-responsive img-rounded img-complaint">

                                </div>
                                <div class="col-md-6">
                                    <!--
                                    <div class="review-block-rate">
                                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                        <i class="fa fa-star fa-lg" aria-hidden="true"></i>
                                        <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                                        <i class="fa fa-star-o fa-lg" aria-hidden="true"></i>
                                    </div>
                                    -->
                                    <div class="review-block-title"><a href="{{  route('viewComplaint',['id'=>$complaint->id]) }}">{{$complaint->name}}</a><span class="date-loan">No ha pagado desde {{$complaint->getDateFormat()}}</span>
                                    <p class="text-debe">Debe: <i class="fa fa-dollar"></i> {{number_format($complaint->amount,2,'.',',')}}</p></div>

                                    <div class="review-block-description">{{str_limit($complaint->story,150)}}</div>
                                    <p class="pull-right"><small>Publicado por {{$complaint->user->name}}</small></p>
                                    <div class="clearfix"></div>
                                    <div class="pull-right"><a href="{{  route('viewComplaint',['id'=>$complaint->id]) }}">Leer historia completa ></a></div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="list-group-item-info list-info">
                                        <li><i class="fa fa-map-marker"></i> {{ empty($complaint->city)?$complaint->city2:$complaint->city." ".$complaint->state}}</li>
                                        <li><i class="fa fa-calendar"></i> {{ $complaint->getDateInDays()  }} dias sin pagar</li>
                                    </ul>
                                </div>
                            </div>
                            <hr/>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
