@extends('avocat.compte')

@section('content_comp')


<div class="row" xmlns="http://www.w3.org/1999/html">
        <div class="col-md-3"></div>
        <div class="col-md-12">

            <div class="panel-body">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><h1 class="panel-title">Données</h1></center>
                    </div>
                    <div class="panel-body">

                        <label  ><strong>Nom & Prénom:</strong> </label>&nbsp;&nbsp;{{$val[0]->name}} <br>
                        <label  ><strong>Sexe:</strong> </label>&nbsp;&nbsp;{{$val[0]->sexe}} <br>
                        <label  ><strong>NCIN:</strong> </label>&nbsp;&nbsp;{{$val[0]->ncin}} <br>
                        <label  ><strong>Adresse:</strong> </label>&nbsp;&nbsp;{{$val[0]->adresse}} <br>
                        <label  ><strong>Gouvernerat:</strong> </label>&nbsp;&nbsp;{{$val[0]->gouvernerat}} <br>
                        <label  ><strong>Mobile:</strong> </label>&nbsp;&nbsp;{{$val[0]->mobile}} <br>
                        <label  ><strong>Bureau:</strong> </label>&nbsp;&nbsp;{{$val[0]->fix}} <br>
                        <label  ><strong>Fax:</strong> </label>&nbsp;&nbsp;{{$val[0]->fax}} <br>
                        <label  ><strong>Spécialiter:</strong> </label>
                                <ul>
                                    @foreach($val['specialiter'] as  $v)
                                        @foreach($v as $vs)
                                           <li>{{$vs->name}}</li>
                                        @endforeach
                                    @endforeach
                                </ul>
                        <center>
                            <button class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal">
                                Modifier</button>
                        </center>

                    </div>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close"
                                            data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        Modifier mes données
                                    </h4>
                                </div>
                                <form action="{{url('/avocat/modifier')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="modal-body">

                                        <center>{!!Form::label ('Nom & Prénom')!!}</center></br>
                                       {!!Form::text ('name',null,['class'=>'form-control','placeholder'=>$val[0]->name])!!}
                                        <br><br><br>

                                        <center>{!!Form::label ('NCIN')!!}</center></br>
                                        {!!Form::text ('ncin',null,['class'=>'form-control','placeholder'=>$val[0]->ncin])!!}
                                        <br><br><br>
                                        <center>{!!form::label ('Sexe')!!}</center> <br>

                                            <select  name="sexe" class="form-control" >
                                                <option></option>
                                                <option>Masculin</option>
                                                <option>Féminin</option>
                                            </select>
                                                                  <br><br><br>

                                        <center>{!!form::label ('Ville')!!}</center><br>

                                            <select name="gouvernerat"  class="form-control">
                                                <option></option>
                                                <option>Ariana</option>
                                                <option>Béja</option>
                                                <option>Ben Arous</option>
                                                <option>Bizerte</option>
                                                <option>Gabès</option>
                                                <option>Gafsa</option>
                                                <option>Jendouba</option>
                                                <option>Kairouan</option>
                                                <option>Kasserine</option>
                                                <option>Kébili</option>
                                                <option>La Manouba</option>
                                                <option>Le Kef</option>
                                                <option>Mahdia</option>
                                                <option>Médenine</option>
                                                <option>Monastir</option>
                                                <option>Nabeul</option>
                                                <option>Sfax</option>
                                                <option>Sidi Bouzid</option>
                                                <option>Siliana</option>
                                                <option>Sousse</option>
                                                <option>Tataouine</option>
                                                <option>Tozeur</option>
                                                <option>Tunis</option>
                                                <option>Zaghouan</option>
                                            </select>
                                                               <br><br><br>

                                        <center>{!!form::label ('adresse')!!}</center><br>
                                        {!!form::text ('adresse',null,['class'=>'form-control','placeholder'=>$val[0]->adresse])!!}
                                        <br><br><br>

                                         <center>{!!form::label ('Mobile')!!}</center><br>
                                        {!!form::text ('mobile',null,['class'=>'form-control','placeholder'=>$val[0]->mobile])!!}
                                        <br><br><br>

                                        <center>{!!form::label ('bureautique')!!}</center><br>
                                        {!!form::text ('fix',null,['class'=>'form-control','placeholder'=>$val[0]->fix])!!}
                                        <br><br><br>

                                        <center>{!!form::label ('FAX')!!}</center><br>
                                         {!!form::text ('fax',null,['class'=>'form-control','placeholder'=>$val[0]->fax])!!}
                                        <br><br><br><hr/>
                                        <center>{!!form::label ('Ajouter  spécialiter')!!}</center><br>

                                            <select name="specialiter[]" multiple   >
                                                <option style="display: none" value="0">Choisir votre spécialiter</option>
                                                <option value="1">Droit Bancaire et Financier</option>
                                                <option value="2">Droit administratif</option>
                                                <option value="3">Droit communautaire</option>
                                                <option value="4">Droit des sociétés</option>
                                                <option value="5">Droit de transport</option>
                                                <option value="Droit pénal">Droit pénal</option>
                                                <option value="Droit médical">Droit médical</option>
                                                <option value="Droit international">Droit international</option>
                                                <option value="Droit des affaires">Droit des affaires</option>
                                                <option value="Droit des assurances">Droit des assurances</option>
                                                <option value="Droit judiciaire">Droit judiciaire</option>
                                                <option value="Droit de marchés publics">Droit de marchés publics</option>
                                                <option value="Droit commercial et économique">Droit commercial et économique</option>
                                                <option value="Droit de la famille, des personnes et de leur patrimoine">Droit de la famille, des personnes et de leur patrimoine</option>
                                                <option value="Droit immobilier">Droit immobilier</option>
                                                <option value="Droit social">Droit social</option>
                                                <option value="Droit de l'investissement">Droit de l'investissement</option>
                                                <option value="Droit des nouvelles technologies">Droit des nouvelles technologies</option>
                                                <option value="Droit fiscal">Droit fiscal</option>
                                                <option value="Droit constitutionnel">Droit constitutionnel</option>
                                                <option value="Droit civil">Droit civil</option>
                                                <option value="Droit de la propriété intellectuelle">Droit de la propriété intellectuelle</option>
                                            </select>

                                        <br/><br/><br/><br/>

                                        <center>{!!form::label ('Supprimer  spécialiter')!!}</center><br>
                                        <select name="supsp" class="form-control">
                                            <option value="0"></option>
                                            @foreach($val['specialiter'] as  $v)
                                                @foreach($v as $vs)

                                                        <option value="{{$vs->id}}">{{$vs->name}}</option>

                                                 @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="modal-footer">
                                        <center>
                                            <button  type="submit" class="btn btn-primary">
                                                    <span class="glyphicon glyphicon-ok"></span> Registrer</button>
                                            <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close
                                            </button>
                                        </center>


                                    </div>
                              </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>


            </div>
        </div>
    </div>


@endsection