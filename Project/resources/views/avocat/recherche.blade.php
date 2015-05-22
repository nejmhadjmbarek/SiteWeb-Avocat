@extends('avocat.compte')
@section('z') absolute @endsection

@section('content_comp')
@if($client)


    <div id="MainMenu">
        <div class="list-group panel">
           <li> <a href="#1" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Recherche avec Numéro de dossier &nbsp;&#187;  </a></li>
            <div class="collapse" id="1">
                <div class="well">
                    <form action="{{ url('/avocat/recherche') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" required name="rechnum" class="form-control" placeholder="Numéro de dossier"/><br/>
                           <center><button class="btn btn-primary">Rechercher</button></center>
                    </form>
                </div>
            </div>
            <br/>
            <li><a href="#2" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Recherche avec nom & prénom&nbsp;&nbsp; &#187;</a></li>
            <div class="collapse" id="2">
                <div class="well">
                    <form action="{{ url('/avocat/recherche') }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <select required  class="form-control" name="client">
                            <option value=""></option>

                            @foreach($client as $v)

                            <option value="{{$v->id}}">{{$v->nom}} {{$v->prenom}}</option>
                            @endforeach
                        </select>

                    <br/>
                    <center><button class="btn btn-primary">Rechercher</button></center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br/>

    @else
    <p class="alert alert-danger">Vous n'avez pas aucun client!!!</p>
@endif


@endsection