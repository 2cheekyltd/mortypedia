@forelse($data as $morty)
    <?php $morty = $morty['data']; ?>

    <div class="resultContainer row no-gutters align-items-center" id="morty-{{ $morty['id'] }}">

        <div class="col-2 imageContainer">
            <img src="{{ $morty['sprites']->front_default }}" alt="{{ ucfirst($morty['name']) }}'s Picture"/>
        </div>

        <div class="col-9 infoContainer">
            <p><span>#{{ $morty['id'] }}</span> {{ ucfirst($morty['name']) }}</p>
        </div>

        <div class="col-1 linkContainer">
            <a href="{{ route('morty.show', $morty['name']) }}">VISIT</a>
        </div>

    </div>

@empty

    <div class="noResults">
        <h1>SORRY!</h1>
        <p>Our researchers came back with nothing past this point =(</p>
    </div>

@endforelse
