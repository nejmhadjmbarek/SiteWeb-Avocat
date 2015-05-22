@extends('avocat.compte')
@section('z') absolute @endsection

@section('content_comp')

    <?php
    function heure ($str)
        {
            if($str[1]=='1')

                {$h1=$str[1].$str[2].':'.$str[4].$str[5].' à ';
                $h2=$str[7].$str[8].':'.$str[10].$str[11];}

            else
            {
                $h1=$str[1].':'.$str[3].$str[4].' à ';
                if($str[6]=='1')
                    $h2=$str[6].$str[7].':'.$str[9].$str[10];
                else
                    $h2=$h2=$str[6].':'.$str[8].$str[9];

            }

            return $h1.$h2;

        }
    ?>

    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title"><strong>Les demandes </strong></h1>
                    </div>
                    <div class="panel-body">

                    @if($idm[0])
                        <ul>
                            @foreach($idm as  $ii)

                                <li>
                                    <a href="#{{$ii->id}}" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu"><strong>{{$ii->sujet}}</strong> &#187; </a>
                                   </li>
                                <div class="collapse" id="{{$ii->id}}">
                                    <div class="well">
                                        <label  ><strong>Nom de client:</strong> </label>&nbsp;&nbsp;{{$ii->name}} <br>
                                        <label  ><strong>NCIN:</strong> </label>&nbsp;&nbsp;{{$ii->ncin}} <br>
                                        <label  ><strong>Téléphone</strong> </label>&nbsp;&nbsp;{{$ii->mobile}}<br>
                                        <label  ><strong>E-mail</strong> </label>&nbsp;&nbsp;{{$ii->email}}<br>
                                        <label  ><strong>Date</strong> </label>&nbsp;&nbsp;{{$ii->date}}&nbsp;de&nbsp;<?= heure($ii->heure)?><br>

                                        <form style="display: inline;" action="{{url('/avocat/accepter')}}" method="POST">
                                            <input type="hidden" name="id" value="{{$ii->id}}"/>
                                            <input type="hidden" name="heure" value="{{$ii->heure}}"/>
                                            <input type="hidden" name="date" value="{{$ii->date}}"/>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-info" value="Accepter"/>
                                        </form>
                                        <form style="display: inline;" action="{{url('/avocat/refuser')}}" method="POST">
                                            <input type="hidden" name="id" value="{{$ii->id}}"/>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-danger" value="Réfuser"/>
                                        </form>

                                    </div>

                                </div>
                            @endforeach
                        </ul>
                        @else
                        <br><br><p>Tu n'as pas des demandes !</p>
                        @endif



                    </div>
                </div>




    @stop