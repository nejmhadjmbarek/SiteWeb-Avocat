@extends('avocat.compte')



@section('content_comp')


<script>
    $(document).ready(function() {
        $('#dateRangePicker')
            .datepicker({
                format: 'yyyy-mm-dd',
                startDate: '2010-01-01',
                endDate: '2020/12/30'
            })
            .on('changeDate', function(e) {
                // Revalidate the date field
                $('#dateRangeForm').formValidation('revalidateField', 'date');
            });

        $('#dateRangeForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                date: {
                    validators: {
                        notEmpty: {
                            message: 'The date is required'
                        },
                        date: {
                            format: 'yyyy-mm-ddY',
                            min: '2010-01-01',
                            max: '2020/12/30',
                            message: 'The date is not a valid'
                        }
                    }
                }
            }
        });
    });
</script>


<form class="form-inline" method="post" action ="{{ url('/avocat/dossier') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <hr>
    <div class="form-group">
        <label>Numero</label>
        <input type="text" class="form-control"  placeholder="numero" name="num">
    </div>
    <hr>
    <fieldset>
        <legend>personnes</legend>
        <div class="form-group">
            <label for="exampleInputName2">client</label>
            <select required style="width: 200px" class="form-control" name="client">
                <option value="0"></option>

                    @foreach($client as $v)

                        <option value="{{$v->id}}">{{$v->nom}} {{$v->prenom}}</option>
                    @endforeach
            </select>
                <span style="color: #0000C2;cursor: pointer" data-toggle="modal" data-target="#myModal" class="glyphicon glyphicon glyphicon-plus"></span>
         </div>
        &nbsp;
        &nbsp;
        <div class="form-group">
            <label for="exampleInputEmail2">opposant</label>
            <select  required style="width: 200px" name="opposant" class="form-control">
                <option value="0"></option>
                @foreach($opposant as $v)
                <option value="{{$v->id}}">{{$v->nom}} {{$v->prenom}}</option>
                @endforeach
            </select>
                <span style="color: #0000C2;cursor: pointer" data-toggle="modal" data-target="#myModal1" class="glyphicon glyphicon glyphicon-plus"></span>
              </div><br><br><br>
        <div class="form-group">
            <label for="exampleInputName2">avocat d'opposant</label>
            <select required style="width: 200px" class="form-control" name="avopposant">
                <option value="0"></option>
                @foreach($avopposant as $v)
                <option value="{{$v->id}}">{{$v->nom}} {{$v->prenom}}</option>
                @endforeach
            </select>
            <span style="color: #0000C2; cursor: pointer" data-toggle="modal" data-target="#myModal5" class="glyphicon glyphicon glyphicon-plus"></span>

        </div>
        <br/>
        <br/>

        <div class="form-group">
            <label for="exampleInputName2">nature de client</label>
            &nbsp;&nbsp;&nbsp;
            <select  name="nature_client" class="form-control" id="sel1">
                <option value=""></option>
                <option>nature1</option>
                <option>nature2</option>
                <option>nature3</option>
                <option>nature4</option>
            </select>
        </div>

    </fieldset><br><br>
    <fieldset>
        <legend>tribunale</legend>

        <div class="form-group">
            <label>tribunale</label>
            <select required style="width: 200px" class="form-control" name="tribunale">
                <option value=""></option>
                <option value="tribunal1">tribunale1</option>
                <option value="tribunal2">tribunal2</option>
                <option value="tribunal3">tribunal3</option>
                <option value="tribunal4">tribunal4</option>
                <option value="tribunal5">tribunal5</option>
            </select>

        </div><br><br><br>
        <div class="form-group">
            <label>detail tribunale</label>
            <textarea  name ="detail_tribunal" class="form-control" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label>sujet</label>
            <textarea name="sujet" class="form-control" rows="4"></textarea>
        </div>


    </fieldset>
    </hr><br><br>
    <fieldset>
        <legend>details</legend>

        <div class="form-group">
            <label for="exampleInputName2">date enregistrement</label>
            <div class="form-group">

                <div class="col-xs-12 date">
                    <div class="input-group input-append date" id="dateRangePicker">
                        <input type="text" class="form-control" name="date_enregistrement" />
                        <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">remarque</label>
            <textarea class="form-control" name="remarque" rows="3"></textarea>
        </div><br><br><br>
        <div class="form-group">
            <label>honoraires</label>
            <input type="text" class="form-control" name="honoraire">
        </div>
    </fieldset>


  <center><button type="submit" class="btn btn-primary">Creer</button></center>




</form>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
<form action="{{ url('/avocat/nvclient') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Nouveau client
                </h4>
            </div>
            <div class="modal-body">
                    <table>
                        <tr>
                            <td >
                                <label >Genre</label>
                                <select class="form-control" name="genre" required >
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label  >Nom</label>
                                <input  required class="form-control" value="" name="nom" type="text"/>
                            </td>

                            <td style="width: 50%">
                                <label >Prénom</label>
                                <input required class="form-control" value="" name="prenom" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label >Adresee</label>
                                <input required class="form-control" name="adresse" type="text"/>
                            </td>

                        </tr>
                    </table>
                    &nbsp;
                    <table>
                        <tr>
                            <td style="width: 50%">
                                <label >Téléphone</label>
                                <input required class="form-control" name="tel" type="text"/>
                            </td>
                            <td>
                                <label >Fax</label>
                                <input class="form-control" name="fax" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label >GSM</label>
                                <input class="form-control" name="gsm" type="text"/>
                            </td>
                            <td>
                                <label >Email</label>
                                <input required class="form-control" name="email" type="email"/>
                            </td>
                        </tr>
                    </table>
                    &nbsp;
                    <table>
                        <tr>
                            <td style="width: 50%">
                                <label >NCIN</label>
                                <input class="form-control" name="identite" required type="text"/>
                            </td>
                            <td>
                                <label >Lieu</label>
                                <input class="form-control" name="lieu_ident" required type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Date</label><br/>
                                <div class="col-md-4">{!!Form::text ('jj',null,['class'=>'form-control','placeholder'=>'jj','required'])!!}</div>
                                <div class="col-md-4">{!!Form::text ('mm',null,['class'=>'form-control','placeholder'=>'mm','required'])!!}</div>
                                <div class="col-md-4">{!!Form::text ('aaaa',null,['class'=>'form-control','placeholder'=>'aaaa','required'])!!}</div>

                            </td>

                        </tr>
                    </table>



            </div>
            <div class="modal-footer">
                <center>
                    <button type="submit" class="btn btn-primary"
                           >Enregistrer
                    </button>
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                </center>


            </div>
        </div><!-- /.modal-content -->
    </div><!--/.modal-dialog -->
    </form>
</div><!-- /.modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
<form action="{{ url('/avocat/nvopposant') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Nouveau opposant
                </h4>
            </div>
            <div class="modal-body">

                    <table>
                        <tr>
                            <td >
                                <label >Genre</label>
                                <select class="form-control" name="genre" required >
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label  >Nom</label>
                                <input  required class="form-control" value="" name="nom" type="text"/>
                            </td>

                            <td style="width: 50%">
                                <label >Prénom</label>
                                <input required class="form-control" value="" name="prenom" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label >Adresee</label>
                                <input required class="form-control" name="adresse" type="text"/>
                            </td>

                        </tr>
                    </table>
                    &nbsp;
                    <table>
                        <tr>
                            <td style="width: 50%">
                                <label >Téléphone</label>
                                <input required class="form-control" name="tel" type="text"/>
                            </td>
                            <td>
                                <label >Fax</label>
                                <input class="form-control" name="fax" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label >GSM</label>
                                <input class="form-control" name="gsm" type="text"/>
                            </td>
                            <td>
                                <label >Email</label>
                                <input required class="form-control" name="email" type="email"/>
                            </td>
                        </tr>
                    </table>
                    &nbsp;
                    <table>
                        <tr>
                            <td style="width: 50%">
                                <label >NCIN</label>
                                <input class="form-control" name="identite" required type="text"/>
                            </td>
                            <td>
                                <label >Lieu</label>
                                <input class="form-control" name="lieu_ident" required type="text"/>
                            </td>
                        </tr>
                        <br/><br/><br/>
                        <tr>
                            <td>
                                <label>Date</label><br/>
                                <div class="col-md-4">{!!Form::text ('jj',null,['class'=>'form-control','placeholder'=>'jj','required'])!!}</div>
                                <div class="col-md-4">{!!Form::text ('mm',null,['class'=>'form-control','placeholder'=>'mm','required'])!!}</div>
                                <div class="col-md-4">{!!Form::text ('aaaa',null,['class'=>'form-control','placeholder'=>'aaaa','required'])!!}</div>

                            </td>

                        </tr>
                    </table>



            </div>
            <div class="modal-footer">
                <center>
                    <button type="submit" class="btn btn-primary"
                            >Enregistrer
                    </button>
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                </center>


            </div>
        </div><!-- /.modal-content -->
    </div><!--/.modal-dialog -->
</form>
</div>


<div class="modal fade" id="myModal5" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="{{ url('/avocat/nvavopposant') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Avocat d'opposant
                </h4>
            </div>
            <div class="modal-body">
                <form action="">
                    <table>
                        <tr>
                            <td >
                                <label >Genre</label>
                                <select class="form-control" name="genre" required >
                                    <option value="Mr">Mr</option>
                                    <option value="Mme">Mme</option>
                                </select>
                            </td>
                            <td >
                                <label >Spécialité</label>
                                <select name="specialite"required class="form-control">
                                    <option style="display: none" value="">spécialiter de l'avocat</option>
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
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label  >Nom</label>
                                <input  required class="form-control" value="" name="nom" type="text"/>
                            </td>

                            <td style="width: 50%">
                                <label >Prénom</label>
                                <input required class="form-control" value="" name="prenom" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label >Adresee</label>
                                <input required class="form-control" name="adresse" type="text"/>
                            </td>

                        </tr>
                    </table>
                    &nbsp;
                    <table>
                        <tr>
                            <td style="width: 50%">
                                <label >Téléphone</label>
                                <input required class="form-control" name="tel" type="text"/>
                            </td>
                            <td>
                                <label >Fax</label>
                                <input class="form-control" name="fax" type="text"/>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 50%">
                                <label >GSM</label>
                                <input class="form-control" name="gsm" type="text"/>
                            </td>
                            <td>
                                <label >Email</label>
                                <input required class="form-control" name="email" type="email"/>
                            </td>
                        </tr>
                    </table>
                    &nbsp;
                    <table>
                        <label >Remarque</label>
                        <textarea class="form-control" name="remarque" id="" cols="30" rows="5"></textarea>
                    </table>
                </form>


            </div>
            <div class="modal-footer">
                <center>
                    <button type="submit" class="btn btn-primary"
                            >Enregistrer
                    </button>
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                </center>


            </div>
        </div><!-- /.modal-content -->
    </div><!--/.modal-dialog -->
    </form>
</div><!-- /.modal -->
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
 <form  data-toggle="modal" data-target="#myModal6" method="post">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"
                        data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   Tribunale
                </h4>
            </div>
            <div class="modal-body">
                 <div >
                     <label>Type</label>
                     <select class="form-control" name="type">
                         <option value="a">dz</option>
                     </select>
                     <label>Région</label>
                     <select class="form-control" name="region">
                         <option value="d">sfs</option>
                     </select>


                 </div>
            </div>
            <div class="modal-footer">
                <center>
                    <button type="submit" class="btn btn-primary"
                           >Rechercher
                    </button>
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                </center>


            </div>
        </div><!-- /.modal-content -->
    </div><!--/.modal-dialog -->
</form>
</div><!-- /.modal -->

@endsection