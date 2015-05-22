@extends('avocat.compte')

@section('content_comp')
@if($val)
<Strong>Dossier Numéro: </Strong>{{$val[0]->num_dossier}}<br/><br/>
<strong>Sujet: </strong>{{$val[0]->sujet}}<br/><br/>
<strong>Nature de client: </strong>{{$val[0]->nature_client}}<br/><br/>
<a href="#a" style="width: 50%;background: #ffffff; border-radius: 6px" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Détail client&nbsp;&#187;</a>
<div class="collapse" id="a">
    <div class="well" style="width: 50%; background: #ffffff; border-radius: 6px">
        <strong>Nom & Prénom: </strong>{{$val['client'][0]->genre}} {{$val['client'][0]->nom}} {{$val['client'][0]->prenom}}<br/>
        <strong>NCIN: </strong>{{$val['client'][0]->identite}} <strong>Lieu: </strong>{{$val['client'][0]->lieu_identite}}<br/>
        <strong>Email: </strong>{{$val['client'][0]->email}}<br/>
        <strong>Mobile: </strong>{{$val['client'][0]->gsm}}<br/>
        <strong>Téléphone: </strong>{{$val['client'][0]->tel}}<br/>
        <strong>Fax: </strong>{{$val['client'][0]->fax}}<br/>
        <strong>Adresse: </strong>{{$val['client'][0]->adresse}}<br/>
        <strong>Date: </strong>{{$val['client'][0]->date}}
    </div>
</div>
<br/>
<a href="#b" style="width: 50%;background: #ffffff; border-radius: 6px" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Détail opposant&nbsp;&#187;</a>
<div class="collapse" id="b">
    <div class="well" style="width: 50%; background: #ffffff; border-radius: 6px">
        <strong>Nom & Prénom: </strong>{{$val['opposant'][0]->genre}} {{$val['client'][0]->nom}} {{$val['opposant'][0]->prenom}}<br/>
        <strong>NCIN: </strong>{{$val['opposant'][0]->identite}} <strong>Lieu: </strong>{{$val['opposant'][0]->lieu_identite}}<br/>
        <strong>Email: </strong>{{$val['opposant'][0]->email}}<br/>
        <strong>Mobile: </strong>{{$val['opposant'][0]->gsm}}<br/>
        <strong>Téléphone: </strong>{{$val['opposant'][0]->tel}}<br/>
        <strong>Fax: </strong>{{$val['opposant'][0]->fax}}<br/>
        <strong>Adresse: </strong>{{$val['opposant'][0]->adresse}}<br/>
        <strong>Date: </strong>{{$val['opposant'][0]->date}}
    </div>
</div>
<br/>
<a href="#c" style="width: 50%;background: #ffffff; border-radius: 6px" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Détail avocat d'opposant&nbsp;&#187;</a>
<div class="collapse" id="c">
    <div class="well" style="width: 50%; background: #ffffff; border-radius: 6px">
        <strong>Nom & Prénom: </strong>{{$val['avocat'][0]->genre}} {{$val['client'][0]->nom}} {{$val['avocat'][0]->prenom}}<br/>
        <strong>Email: </strong>{{$val['avocat'][0]->email}}<br/>
        <strong>Mobile: </strong>{{$val['avocat'][0]->gsm}}<br/>
        <strong>Téléphone: </strong>{{$val['avocat'][0]->tel}}<br/>
        <strong>Fax: </strong>{{$val['avocat'][0]->fax}}<br/>
        <strong>Adresse: </strong>{{$val['avocat'][0]->adresse}}<br/>
        <strong>Spécialiter: </strong>{{$val['avocat'][0]->specialite}}<br/>
        <strong>Remarque: </strong>{{$val['avocat'][0]->remarque}}
    </div>
</div>
<br/>
<a href="#d" style="width: 50%;background: #ffffff; border-radius: 6px" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Détail tribunale&nbsp;&#187;</a>
<div class="collapse" id="d">
    <div class="well" style="width: 50%; background: #ffffff; border-radius: 6px">
        <strong>Nom: </strong>{{$val['tribunale'][0]->nom}}<br/>
        <strong>Téléphone: </strong>{{$val['tribunale'][0]->tel}}<br/>
        <strong>Fax: </strong>{{$val['tribunale'][0]->fax}}<br/>
        <strong>Adresse: </strong>{{$val['tribunale'][0]->adresse}}<br/>
        <strong>Spécialiter: </strong>{{$val['tribunale'][0]->region}}<br/>
        <strong>Email: </strong>{{$val['tribunale'][0]->type}}<br/>

    </div>
</div>
<br/>
<strong>Date d'enregistrement: </strong>{{$val[0]->date_enregistrement}}<br/><br/>
<strong>Remarque: </strong>{{$val[0]->remarque}}<br/><br/>
<strong>honoraire: </strong>{{$val[0]->honoraire}}<br/>

@endif
@endsection