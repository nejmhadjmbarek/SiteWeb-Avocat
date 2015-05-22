@extends('welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-12">

                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Création du compte</h1>
                        </div>
                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {!!Form::open()!!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            {!!Form::label ('Nom & Prénom')!!}</br>
                            <div class="col-md-4">{!!Form::text ('name',null,['class'=>'form-control','placeholder'=>'Nom et prénom','required'])!!}</div>
                            <br><br><br>

                            {!!Form::label ('NCIN')!!}</br>
                            <div class="col-md-4">{!!Form::text ('ncin',null,['class'=>'form-control','placeholder'=>'ncin','required'])!!}</div>
                            <br><br><br>

                            {!!form::label ('Email')!!}<br>
                            <div class="col-md-4">{!!Form::email ('email',null,['class'=>'form-control','placeholder'=>'Email','required'])!!}</div>
                            <br><br><br>

                            {!!form::label ('Mot de passe')!!}<br>
                            <div class="col-md-3">{!!Form::password ('password',['class'=>'form-control','placeholder'=>'Mot de passe','required'])!!}</div>
                            <div class="col-md-3">{!!Form::password ('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmation','required'])!!}</div>
                            <br><br><br><hr/>

                            {!!form::label ('Sexe')!!} <br>
                            <div class="col-md-3">
                                <select name="sexe" class="form-control" >
                                    <option></option>
                                    <option>Masculin</option>
                                    <option>Féminin</option>
                                </select>
                            </div>                            <br><br><br>

                            {!!form::label ('Ville')!!}<br>
                            <div class="col-md-3">
                                <select name="gouvernerat" required class="form-control">
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
                            </div>                            <br><br><br>

                            {!!form::label ('adresse')!!}<br>
                            <div class="col-md-3">{!!form::text ('adresse',null,['class'=>'form-control','placeholder'=>'adresse','required'])!!}</div>
                            <br><br><br>



                            {!!form::label ('Coordonnées')!!}<br>
                            <div class="col-md-3">{!!Form::text ('longitude',null,['class'=>'form-control','placeholder'=>'Longitude'])!!}</div>
                            <div class="col-md-3">{!!Form::text ('latitude',null,['class'=>'form-control','placeholder'=>'Latitude'])!!}</div>

                            <br><br><br>


                            {!!form::label ('Mobile')!!}<br>
                            <div class="col-md-3">{!!form::text ('mobile',null,['class'=>'form-control','placeholder'=>'Mobile','required'])!!}</div>
                            <br><br><br>

                            {!!form::label ('bureautique')!!}<br>
                            <div class="col-md-3">{!!form::text ('fix',null,['class'=>'form-control','placeholder'=>'Fix bureau','required'])!!}</div>
                            <br><br><br>

                            {!!form::label ('FAX')!!}<br>
                            <div class="col-md-3">{!!form::text ('fax',null,['class'=>'form-control','placeholder'=>'FAX'])!!}</div>
                            <br><br><br><hr/>


                                <div class="col-md-5">
                                <select name="specialiter[]" multiple  required class="selectpicker">
                                <option style="display: none" value="0">Choisir votre spécialiter</option>
                                <option value="1">Droit Bancaire et Financier</option>
                                <option value="2">Droit administratif</option>
                                <option value="3">Droit communautaire</option>
                                <option value="4">Droit des sociétés</option>
                                <option value="Droit de transport">Droit de transport</option>
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
                                </div>


                            <div class="col-md-12"><br><br><br><button  type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-ok"></span> Registrer</button></div>

                            {!!Form::close()!!}

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<script>
    $('.selectpicker').selectpicker({
        style: 'btn-info',
        size: 4
    });
</script>
@endsection
