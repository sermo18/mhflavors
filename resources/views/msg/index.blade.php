@extends('plantilla')
@section('titulo', 'Todos los Sabores')
@section('contenido')
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">

<div class="container-fluid">
    <div class="row" style="min-height: 100vh;">
        <div class="col-sm-12">
            <div class="chatbody">
                <div class="panel panel-primary">
                    <nav class="navbar navbar-dark bg-dark">

                        <h3 class="panel-title navbar-brand"><span class="glyphicon glyphicon-comment"></span> Chat</h3>
                    </nav>

                    <div class="panel-body msg_container_base">
                        <div class="row msg_container base_sent">
                            <div class="col-md-10 col-xs-10">
                                <div class="messages msg_sent">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                            </div>
                            <div class="col-md-2 col-xs-2 avatar">
                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                            </div>
                        </div>
                        <div class="row msg_container base_receive">
                            <div class="col-md-2 col-xs-2 avatar">
                                <img src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg" class=" img-responsive ">
                            </div>
                            <div class="col-md-10 col-xs-10">
                                <div class="messages msg_receive">
                                    <p>that mongodb thing looks good, huh?
                                        tiny master db, and huge document store</p>
                                    <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" id="btn-chat"><i class="fa fa-send fa-1x" aria-hidden="true"></i></button>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>











@endsection
