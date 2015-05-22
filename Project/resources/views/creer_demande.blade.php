
@extends('welcome')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-9">
                <div class="panel-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h1 class="panel-title">Rédiger une demande</h1>
                        </div>
                        <div class="panel-body">
                            <form style="display: inline;" action="{{url('/envoyer')}}" method="POST">

                            <label  ><strong>Votre nom & prénom:</strong> </label><br>
                            <div class="col-md-5">{!!Form::text ('name',null,['class'=>'form-control','placeholder'=>'Nom et prénom','required'])!!}</div>
                            <br><br>
                                <label  ><strong>NCIN</strong> </label><br>
                                <div class="col-md-5">{!!Form::text ('ncin',null,['class'=>'form-control','placeholder'=>'NCIN'])!!}</div>
                                <br><br>
                                <label  ><strong>Votre mobile:</strong> </label><br>
                                <div class="col-md-8">{!!Form::text ('mobile',null,['class'=>'form-control','placeholder'=>'Numéro téléphone'])!!}</div>
                                <br><br>
                                <label  ><strong>Votre E-mail:</strong> </label><br>
                                <div class="col-md-8">{!!Form::email ('email',null,['class'=>'form-control','placeholder'=>'E-mail','required'])!!}</div>
                                <br><br>
                            <label  ><strong>Sujet:</strong> </label><br>
                            <div class="col-md-8">{!!Form::text ('sujet',null,['class'=>'form-control','placeholder'=>'Sujet du rendez-vous','required'])!!}</div>
                            <br><br>

                            <label  ><strong>Date:</strong> </label><br>
                            <div class="col-md-2">{!!Form::text ('jj',null,['class'=>'form-control','placeholder'=>'jj','required'])!!}</div>
                            <div class="col-md-2">{!!Form::text ('mm',null,['class'=>'form-control','placeholder'=>'mm','required'])!!}</div>
                            <div class="col-md-3">{!!Form::text ('aaaa',null,['class'=>'form-control','placeholder'=>'aaaa','required'])!!}</div>
                            <br><br>
                            <label  ><strong>Heure:</strong> </label><br>
                            <div class="col-md-2">
                                <select name="heure" class="form-control">
                                    <option>hh</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                </select>
                            </div>

                            <div class="col-md-2">
                                <select name="minutes" class="form-control">
                                    <option>mm</option>
                                    <option>00</option>
                                    <option>30</option>

                                </select>
                            </div>
                                <br><br>

                                    <input type="hidden" name="id" value="{{$id}}"/>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-primary" value="Envoyer"/>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @stop