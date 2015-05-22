@extends('avocat.compte')
@section('z') absolute @endsection

@section('content_comp')
<h3><center><span id="date_heure"></span></center></h3>
<div class="modal-content">
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
                    <td>Réserver</td>
                    <td>
                        @if($_8_00_8_30)
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Réserver</button>
                        @endif
                    </td>
                    <td>
                        @if($_8_30_9_00)
                        <input type="submit" value="reserver" class="btn btn-primary"/>
                        @endif
                    </td>
                    <td>
                        @if($_9_00_9_30)
                        <button id="id" value="_9_00_9_30" onclick="get_val();" class="btn btn-primary" data-toggle="modal"
                                data-target="#myModal">
                            Réserver</button>@endif
                    </td>
                    <td>
                        @if($_9_30_10_00)
                        <input type="submit" value="reserver" class="btn btn-primary"/>
                        @endif
                    </td>
                    <td>
                        @if($_10_00_10_30)
                        <input type="submit" value="reserver" class="btn btn-primary"/>
                        @endif
                    </td>
                    <td>
                        @if($_10_30_11_00)
                        <input type="submit" value="reserver" class="btn btn-primary"/>
                        @endif
                    </td>
                    <td>
                        @if($_11_00_11_30)
                        <input type="submit" value="reserver" class="btn btn-primary"/>
                        @endif
                    </td>
                    <td>
                        @if($_11_30_12_00)
                        <input type="submit" value="reserver" class="btn btn-primary"/>
                        @endif
                    </td>

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
            <td>Réserver</td>
            <td>
                @if($_14_00_14_30)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>
            <td>
                @if($_14_30_15_00)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>
            <td>
                @if($_15_00_15_30)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>
            <td>
                @if($_15_30_16_00)

                <button id="id" value="_15_30_16_00" onclick="get_val();" class="btn btn-primary" data-toggle="modal"
                        data-target="#myModal">
                    Réserver</button>
                @endif
            </td>
            <td>
                @if($_16_00_16_30)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>
            <td>
                @if($_16_30_17_00)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>
            <td>
                @if($_17_00_17_30)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>
            <td>
                @if($_17_30_18_00)
                <input type="submit" value="reserver" class="btn btn-primary"/>
                @endif
            </td>

        </tr>
        </tbody>
    </table>
</div>

<script type="text/javascript">window.onload = date_heure('date_heure');</script>
<!-- Modal -->
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
                    Donnée client
                </h4>
            </div>
            <div class="modal-body">

                    <?php
                        $i=0;
                        $str = '<div id="result"></div>';
                        $val = strval($str);
                        echo $val[0];
                    ?>
            </div>
            <div class="modal-footer">
                <center>
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">Close
                    </button>
                </center>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
    function get_val(){

        var nb = document.getElementById('id').value;

        document.getElementById('result').innerHTML = nb;
    }
</script>
@endsection