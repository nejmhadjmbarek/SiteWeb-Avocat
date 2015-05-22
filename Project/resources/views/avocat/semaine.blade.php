@extends('avocat.compte')

@section('content_comp')
<h3><center>
<?php
    function getWeekStarAndEnd($firstDayIsMonday = false, $format = 'd-m-Y') {

        $weekStartTime = mktime(0, 0, 0, date('m'), date('d') - date('w'), date('Y'));
        $weekStartTime += ($firstDayIsMonday)? 86400 : 0;

       echo 'de '.date($format, $weekStartTime).' au '.date($format, strtotime('+6 days', $weekStartTime));

    }
    getWeekStarAndEnd(true);
?>
</center></h3>
<div class="modal-content">

    <table class="table table-bordered">
        <tbody>
        <tr>
            <td></td>
            <td>Lundi</td>
            <td>Mardi</td>
            <td>Mercredi</td>
            <td>Jeudi</td>
            <td>Vendredi</td>
            <td>samedi</td>
            <td>Dimanche</td>

        </tr>
        <tr>
            <td>8.00-8.30</td>
            <td>
                @if($Mon['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_8_00_8_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>8.30-9.00</td>
            <td>
                @if($Mon['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_8_30_9_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>9.00-9.30</td>
            <td>
                @if($Mon['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_9_00_9_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>9.30-10.00</td>
            <td>
                @if($Mon['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_9_30_10_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>10.00-10.30</td>
            <td>
                @if($Mon['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_10_00_10_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>10.30-11.00</td>
            <td>
                @if($Mon['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_10_30_11_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>11.00-11.30</td>
            <td>
                @if($Mon['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_11_00_11_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>11.30-12.00</td>
            <td>
                @if($Mon['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_11_30_12_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr style="background: #f0ad4e">
            <td>12.00-14.00</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        </tr>
        <tr>
            <td>14.00-14.30</td>
            <td>
                @if($Mon['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_14_00_14_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>14.30-15.00</td>
            <td>
                @if($Mon['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_14_30_15_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>15.00-15.30</td>
            <td>
                @if($Mon['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_15_00_15_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>15.30-16.00</td>
            <td>
                @if($Mon['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_15_30_16_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>16.00-16.30</td>
            <td>
                @if($Mon['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_16_00_16_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>16.30-17.00</td>
            <td>
                @if($Mon['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_16_30_17_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>17.00-17.30</td>
            <td>
                @if($Mon['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_17_00_17_30'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        <tr>
            <td>17.30-18.00</td>
            <td>
                @if($Mon['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Tue['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Wed['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Thu['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Fri['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sat['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
            <td>
                @if($Sun['_17_30_18_00'])
                <center><input type="submit" value="reserver" class="btn btn-primary"/></center>
                @endif
            </td>
        </tr>
        </tbody>
    </table>

</div>
@endsection