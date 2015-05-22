@extends('welcome')
@section('x') style="position:absolute ;bottom: 0; width: 100%;display: inline-block" @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Recherche</h1>
                        </div>
                        <div class="panel-body">

                            <form method="POST">
                            {!!Form::label ('Nom & prénom')!!}</br>
                            <div class="col-md-8">{!!Form::text ('name',null,['class'=>'form-control','placeholder'=>'Nom et prénom'])!!}</div>
                            <br><br><br>


                            {!!Form::label ('Ville')!!}</br>
                            <div class="col-md-5">
                                <select name="ville" class="form-control">
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
                            </div>
                            <br><br><br>

                            {!!Form::label ('Spécialité des avocats')!!}</br>
                            <div class="col-md-8">
                                <select name="sp" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">droit Bancaire et Financier</option>
                                    <option value="2">droit administratif</option>
                                    <option value="3">droit communautaire</option>
                                    <option value="4">droit des sociétés</option>
                                    <option value="5">droit de transport</option>
                                    <option value="6">droit pénal</option>
                                    <option value="7">droit médical</option>
                                    <option value="8">droit international</option>
                                    <option value="9">droit des affaires</option>
                                    <option value="10">droit des assurances</option>
                                    <option value="11">droit judiciaire</option>
                                    <option value="12">droit de marchés publics</option>
                                    <option value="13">droit commercial et économique</option>
                                    <option value="14">Droit de la famille, des personnes et de leur patrimoine</option>
                                    <option value="15">droit immobilier</option>
                                    <option value="16">droit social</option>
                                    <option value="17">droit de l'investissement</option>
                                    <option value="18">droit des nouvelles technologies</option>
                                    <option value="19">droit fiscal</option>
                                    <option value="20">droit constitutionnel</option>
                                    <option value="21">droit civil</option>
                                    <option value="22">Droit de la propriété intellectuelle</option>

                                </select>
                            </div>
                            <br><br>

                            <div class="col-md-12"><br><br><br>

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <center><button  type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Chercher</button></center>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @stop