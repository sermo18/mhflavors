@extends('plantilla')
@section('titulo', 'Todos los Sabores')
@section('contenido')
<link href="{{ secure_asset(mix('css/app.css')) }}" rel="stylesheet">

<div class="container-fluid py-5 px-4">

    <div class="row rounded-lg overflow-hidden shadow" style="min-height: 100vh;">
        <!-- Users box-->
        <div class="col-12 px-0">
            <div class="bg-white">

                <div class="bg-gray px-4 py-2 bg-light">
                    <p class="h5 mb-0 py-1">Chat</p>
                </div>


                <!-- Chat Box-->
                <div class="col-12 px-0">
                    <div class="px-4 py-5 chat-box bg-white">
                        <!-- Sender Message-->
                        <div class="media w-50 mb-3">
                        <p class="text-small mb-0 text-muted">Antonio</p>
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-muted">Test which is a new approach all solutions</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">Test which is a new approach to have all solutions</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-muted">Test, which is a new approach to have</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Sender Message-->
                        <div class="media w-50 mb-3"><img src="https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg" alt="user" width="50" class="rounded-circle">
                            <div class="media-body ml-3">
                                <div class="bg-light rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-muted">Test, which is a new approach</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                        <!-- Reciever Message-->
                        <div class="media w-50 ml-auto mb-3">
                            <div class="media-body">
                                <div class="bg-primary rounded py-2 px-3 mb-2">
                                    <p class="text-small mb-0 text-white">Apollo University, Delhi, India Test</p>
                                </div>
                                <p class="small text-muted">12:00 PM | Aug 13</p>
                            </div>
                        </div>

                    </div>

                    <!-- Typing area -->
                    <form action="#" class="bg-light">
                        <div class="input-group">
                            <input type="text" placeholder="Type a message" aria-describedby="button-addon2" class="form-control rounded-0 border-0 py-4 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon2" type="submit" class="btn btn-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-arrow-up-right-square" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.854 8.803a.5.5 0 1 1-.708-.707L9.243 6H6.475a.5.5 0 1 1 0-1h3.975a.5.5 0 0 1 .5.5v3.975a.5.5 0 1 1-1 0V6.707l-4.096 4.096z"/>
</svg></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>










@endsection
