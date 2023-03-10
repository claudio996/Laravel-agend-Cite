<h6 class="navbar-heading text-muted">Gestion</h6>


<ul class="navbar-nav">
    <li class="nav-item  active ">
        <a class="nav-link  active " href="./index.html">
            <i class="ni ni-tv-2 text-danger"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="{{url('/categories')}}">
            <i class="ni ni-briefcase-24 text-blue"></i> Specialities
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./examples/maps.html">
            <i class="fas  fa-stethoscope text-info"></i> Doctors
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./examples/profile.html">
            <i class="fas fa-bed   text-warning"></i> Pacients
        </a>
    </li>
   
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="fas fa-sign-in-alt"></i> logout
        </a>

        <form action="{{ route('logout') }} " method="POST" style="display:none;" id="formLogout">
            @csrf

        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reports</h6>

<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-books text-default" ></i> citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="ni ni-chart-bar-32 text-warning"></i> Desemping medic
        </a>
    </li>
   
</ul>

