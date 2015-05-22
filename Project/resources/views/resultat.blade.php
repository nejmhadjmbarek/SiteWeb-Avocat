@extends('welcome')
@section('x') style="position:absolute ;bottom: 0; width: 100%;display: inline-block" @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Résultat</h1>
                        </div>
                        <div class="panel-body">
                            <ul>
                            @foreach($rech as  $ii)

                                <li>
                                    <a href="#{{$ii->id}}" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><h4><strong>{{$ii->name}} &#187;</strong></h4> </a>
                                </li>
                                    <div class="collapse" id="{{$ii->id}}">
                                        <div class="well">
                                            <label  ><strong>Nom de l'avocat:</strong> </label>&nbsp;&nbsp;{{$ii->name}} <br>
                                            <label  ><strong>NCIN:</strong> </label>&nbsp;&nbsp;{{$ii->ncin}} <br>
                                            <label  ><strong>Gouvernorat:</strong> </label>&nbsp;&nbsp;{{$ii->gouvernerat}}<br>
                                            <label  ><strong>Adresse:</strong> </label>&nbsp;&nbsp;{{$ii->adresse}}<br>
                                            <label  ><strong>E-mail:</strong> </label>&nbsp;&nbsp;{{$ii->email}}<br>
                                            <label  ><strong>Numéro mobile:</strong> </label>&nbsp;&nbsp;{{$ii->mobile}}<br>
                                            <label  ><strong>Numéro du bureau:</strong> </label>&nbsp;&nbsp;{{$ii->fix}}<br>
                                            <label  ><strong>Fax.:</strong> </label>&nbsp;&nbsp;{{$ii->fax}}<br>
                                            <label  ><strong>Domaine(s):</strong> </label>&nbsp;&nbsp;
                                            <ul>
                                            @foreach($spec[$ii->id] as $ss)
                                                <li>{{$ss}}</li>
                                                @endforeach
                                            </ul>
                                            <br>


                                            <form action="{{url('/creer-demande/')}}" method="POST">
                                                <input type="hidden" name="id" value="{{$ii->id}}"/>
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="btn btn-info" value="Demander un rendez-vous"/>
                                            </form>


                                        </div>

                                    </div>

                            @endforeach
                            </ul>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop