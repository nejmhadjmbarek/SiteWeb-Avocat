@extends('avocat.compte')
@section('z') absolute @endsection
@section('content_comp')

@if($msg)
<h4 class="alert alert-success" style="border-radius: 3px;">{{$msg}}</h4>
@endif
<form method="get" action="{{ url('/avocat/modcal') }}">
    <h3>Modifier la calendrier</h3>
    <ul class="nav nav-tabs">
        <li>
            <div id="tabs">
                <ul>
                    <li><a href="#tabs-1">Lundi</a></li>
                    <li><a href="#tabs-2">Mardi</a></li>
                    <li><a href="#tabs-3">Mercredi</a></li>
                    <li><a href="#tabs-4">Jeudi</a></li>
                    <li><a href="#tabs-5">Vendredi</a></li>
                    <li><a href="#tabs-6">Samedi</a></li>
                </ul>
                <div id="tabs-1">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>8.00-8.30</td>
                            <td>8.30-9.00</td>
                            <td>9.00-9.30</td>
                            <td>9.30-10.00</td>
                            <td>10.00-10.30</td>
                            <td>10.30-11.00</td>
                            <td>11.00-11.30</td>
                            <td>11.30-12.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_8_00_8_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_8_30_9_00"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_9_00_9_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_9_30_10_00"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_10_00_10_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_10_30_11_00"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_11_00_11_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_11_30_12_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                    &nbsp;
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>14.00-14.30</td>
                            <td>14.30-15.00</td>
                            <td>15.00-15.30</td>
                            <td>15.30-16.00</td>
                            <td>16.00-16.30</td>
                            <td>16.30-17.00</td>
                            <td>17.00-17.30</td>
                            <td>17.30-18.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_14_00_14_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_14_30_15_00"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_15_00_15_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_15_30_16_00"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_16_00_16_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_16_30_17_00"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_17_00_17_30"/></td>
                            <td><input type="checkbox" name="modCalLundi[]" value="_17_30_18_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tabs-2">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>8.00-8.30</td>
                            <td>8.30-9.00</td>
                            <td>9.00-9.30</td>
                            <td>9.30-10.00</td>
                            <td>10.00-10.30</td>
                            <td>10.30-11.00</td>
                            <td>11.00-11.30</td>
                            <td>11.30-12.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_8_00_8_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_8_30_9_00"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_9_00_9_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_9_30_10_00"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_10_00_10_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_10_30_11_00"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_11_00_11_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_11_30_12_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                    &nbsp;
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>14.00-14.30</td>
                            <td>14.30-15.00</td>
                            <td>15.00-15.30</td>
                            <td>15.30-16.00</td>
                            <td>16.00-16.30</td>
                            <td>16.30-17.00</td>
                            <td>17.00-17.30</td>
                            <td>17.30-18.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_14_00_14_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_14_30_15_00"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_15_00_15_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_15_30_16_00"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_16_00_16_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_16_30_17_00"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_17_00_17_30"/></td>
                            <td><input type="checkbox" name="modCalMardi[]" value="_17_30_18_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tabs-3">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>8.00-8.30</td>
                            <td>8.30-9.00</td>
                            <td>9.00-9.30</td>
                            <td>9.30-10.00</td>
                            <td>10.00-10.30</td>
                            <td>10.30-11.00</td>
                            <td>11.00-11.30</td>
                            <td>11.30-12.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_8_00_8_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_8_30_9_00"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_9_00_9_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_9_30_10_00"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_10_00_10_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_10_30_11_00"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_11_00_11_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_11_30_12_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                    &nbsp;
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>14.00-14.30</td>
                            <td>14.30-15.00</td>
                            <td>15.00-15.30</td>
                            <td>15.30-16.00</td>
                            <td>16.00-16.30</td>
                            <td>16.30-17.00</td>
                            <td>17.00-17.30</td>
                            <td>17.30-18.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_14_00_14_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_14_30_15_00"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_15_00_15_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_15_30_16_00"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_16_00_16_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_16_30_17_00"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_17_00_17_30"/></td>
                            <td><input type="checkbox" name="modCalMercredi[]" value="_17_30_18_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tabs-4">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>8.00-8.30</td>
                            <td>8.30-9.00</td>
                            <td>9.00-9.30</td>
                            <td>9.30-10.00</td>
                            <td>10.00-10.30</td>
                            <td>10.30-11.00</td>
                            <td>11.00-11.30</td>
                            <td>11.30-12.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_8_00_8_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_8_30_9_00"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_9_00_9_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_9_30_10_00"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_10_00_10_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_10_30_11_00"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_11_00_11_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_11_30_12_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                    &nbsp;
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>14.00-14.30</td>
                            <td>14.30-15.00</td>
                            <td>15.00-15.30</td>
                            <td>15.30-16.00</td>
                            <td>16.00-16.30</td>
                            <td>16.30-17.00</td>
                            <td>17.00-17.30</td>
                            <td>17.30-18.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_14_00_14_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_14_30_15_00"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_15_00_15_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_15_30_16_00"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_16_00_16_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_16_30_17_00"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_17_00_17_30"/></td>
                            <td><input type="checkbox" name="modCalJeudi[]" value="_17_30_18_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tabs-5">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>8.00-8.30</td>
                            <td>8.30-9.00</td>
                            <td>9.00-9.30</td>
                            <td>9.30-10.00</td>
                            <td>10.00-10.30</td>
                            <td>10.30-11.00</td>
                            <td>11.00-11.30</td>
                            <td>11.30-12.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_8_00_8_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_8_30_9_00"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_9_00_9_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_9_30_10_00"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_10_00_10_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_10_30_11_00"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_11_00_11_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_11_30_12_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                    &nbsp;
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>14.00-14.30</td>
                            <td>14.30-15.00</td>
                            <td>15.00-15.30</td>
                            <td>15.30-16.00</td>
                            <td>16.00-16.30</td>
                            <td>16.30-17.00</td>
                            <td>17.00-17.30</td>
                            <td>17.30-18.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_14_00_14_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_14_30_15_00"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_15_00_15_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_15_30_16_00"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_16_00_16_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_16_30_17_00"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_17_00_17_30"/></td>
                            <td><input type="checkbox" name="modCalVendredi[]" value="_17_30_18_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tabs-6">
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>8.00-8.30</td>
                            <td>8.30-9.00</td>
                            <td>9.00-9.30</td>
                            <td>9.30-10.00</td>
                            <td>10.00-10.30</td>
                            <td>10.30-11.00</td>
                            <td>11.00-11.30</td>
                            <td>11.30-12.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_8_00_8_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_8_30_9_00"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_9_00_9_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_9_30_10_00"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_10_00_10_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_10_30_11_00"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_11_00_11_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_11_30_12_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                    &nbsp;
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>14.00-14.30</td>
                            <td>14.30-15.00</td>
                            <td>15.00-15.30</td>
                            <td>15.30-16.00</td>
                            <td>16.00-16.30</td>
                            <td>16.30-17.00</td>
                            <td>17.00-17.30</td>
                            <td>17.30-18.00</td>


                        </tr>
                        <tr>
                            <td>Repos</td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_14_00_14_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_14_30_15_00"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_15_00_15_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_15_30_16_00"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_16_00_16_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_16_30_17_00"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_17_00_17_30"/></td>
                            <td><input type="checkbox" name="modCalSamedi[]" value="_17_30_18_00"/></td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </li>
    </ul>

    &nbsp;
    <center>

            <button  class="btn btn-primary">Modifier</button>

    </center>
</form>
@endsection