<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('shared.head', [ 'title' => 'Home', 'css' => ['css/map.css'], 'js' => ['js/map.js'] ])

<body onload="loadMap()">
    @include('shared.navbar')
    <div class="map-row">
        <svg id="map" width="780" height="800"></svg>
    </div>
</body>

</html>