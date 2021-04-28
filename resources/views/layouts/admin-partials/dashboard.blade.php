<div class="left d-none d-lg-block">
    <div class="ul-container">
        <ul>
            <li>
                <a href="{{route('dashboardhome')}}"><i class="fas fa-home"></i>Home</a>
            </li>
            <li>
                <a href="{{ route('messages') }}"><i class="fas fa-users"></i>Messaggi</a>
            </li>
            <li>
                <a href="{{route('property.index')}}"><i class="far fa-sticky-note"></i>Appartamenti</a>
            </li>
            <li>
                <a href="{{ route("property.create") }}"><i class="far fa-plus-square"></i>Crea nuovo</a>
            </li>
            {{-- <li>
                <a href="{{ route("sponsors") }}"><i class="far fa-credit-card"></i>Sponsors</a>
            </li> --}}
        </ul>
    </div>
</div>

<div class="left-small d-lg-none">
    <div class="ul-container">
        <ul>
            <li>
                <a href="{{route('dashboardhome')}}"><i class="fas fa-home"></i></a>
            </li>
            <li>
                <a href="{{ route('messages') }}"><i class="fas fa-users"></i></a>
            </li>
            <li>
                <a href="{{route('property.index')}}"> <i class="special-icon far fa-sticky-note"></i></a>
            </li>
            <li>
                <a href="{{ route("property.create") }}"> <i class="special-icon far fa-plus-square"></i></a>
            </li>
            {{-- <li>
                <a href="{{ route("sponsors") }}"><i class="far fa-credit-card"></i></a>
            </li> --}}
        </ul>
    </div>
</div>
