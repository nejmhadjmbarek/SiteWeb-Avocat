

<div class="well">
    <div id="MainMenu">
        <div class="list-group panel">
            <a href="#demo4" class="list-group-item" data-toggle="collapse" data-parent="#MainMenu">Mes iténeraires &#187; </a>
            <div class="collapse" id="demo4">
                <li><a href="{{ url('/avocat/modcal') }}" class="list-group-item">Modifier la calendrier</a></li>
                <li><a href="{{ url('/avocat/jour') }}" class="list-group-item">jour</a></li>
                <li><a href="{{ url('/avocat/semaine') }}" class="list-group-item">semaine</a></li>


            </div>
            <a href="{{ url('/avocat/donnee') }}" class="list-group-item"  data-parent="#MainMenu">Mes données</a>
            <a href="{{ url('/avocat/nouveau') }}" class="list-group-item" data-parent="#MainMenu">Mes affaires</a>
            <a href="{{ url('/avocat/demandes') }}" class="list-group-item"  data-parent="#MainMenu">Mes demandes</a>
        </div>
    </div>
</div>
