    @extends('welcome')
   @section('x') style="position:@yield('z') ;bottom: 0; width: 100%;display: inline-block" @endsection

    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="span3">
                        <div class="span3">
                            <div class="well">
                                <div id="MainMenu">
                                    <div class="list-group panel">
                                        <a href="#demo4" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Mes iténeraires &nbsp;&#187;  </a>
                                        <div class="collapse" id="demo4">
                                            <li><a href="{{ url('/avocat/modcal') }}" class="list-group-item">Modifier la calendrier</a></li>
                                            <li><a href="{{ url('/avocat/jour') }}" class="list-group-item">jour</a></li>
                                            <li><a href="{{ url('/avocat/semaine') }}" class="list-group-item">semaine</a></li>


                                        </div>
                                        <a href="{{ url('/avocat/donnee') }}" class="list-group-item"  data-parent="#MainMenu">Mes données</a>
                                        <a href="#demo5" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Mes affaires&nbsp;&nbsp; &#187;</a>
                                        <div class="collapse" id="demo5">
                                            <li><a href="{{ url('/avocat/nouveau') }}" class="list-group-item">Creer un dossier</a></li>
                                            <li><a href="{{ url('/avocat/recherche') }}" class="list-group-item">Chercher un dossier</a></li>
                                            <li><a href="{{ url('/avocat/archive') }}" class="list-group-item">Archive</a></li>


                                        </div>
                                        <a href="{{ url('/avocat/demandes') }}" class="list-group-item"  data-parent="#MainMenu">Mes demandes @if($nb[0])<span class="badge">{{$nb[0]}}</span>@endif</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                 </div>
            </div>
            <div class="well" style="margin-left: 300px;">

                @yield('content_comp')
            </div>

        </div>

    </div>
    <script>
        $(function() {
            $( "#tabs" ).tabs({
                event: "mouseover"
            });
        });
    </script>

    @endsection