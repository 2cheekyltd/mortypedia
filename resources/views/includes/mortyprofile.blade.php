<?php $morty = $data['data']; ?>
<!-- Returns the full profile of the character in question -->
<div class="default-width-container">
    <div class="profile">
        <div class="staticInfo left">
            <h1 class="title">
                <span class="idNumber">#{{ $morty['id'] }}</span>
                - {{ ucfirst($morty['name']) }}
            </h1>
        </div>
        <div class="staticInfo right">
            <div class="multiPart">
                <p>{{ $morty['status'] }}<span>STATUS</span></p>
                <p>{{ $morty['species'] }}<span>SPECIES</span></p>
                <p>{{ $morty['type'] }}<span>TYPE</span></p>
                <p>{{ $morty['gender'] }}<span>GENDER</span></p>
            </div>
        </div>
        <div class="imgContainer">
            <img src="{{ $morty['image']->front_default }}" alt="{{ ucfirst($morty['name']) }}'s Picture"/>
        </div>
        <div class="infoContainer">
            <h1>Appearances</h1>
            <table>
                <thead>
                <tr>
                    <th>EPISODES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($morty['episode'] as $episodes)
                    <tr>
                        <td>{{ $episodes}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
