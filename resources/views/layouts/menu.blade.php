@if ( Auth::user()->role_id == 1)

<li class="nav-item">
    <a href="{{ route('roles.index') }}"
    class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
    <i class="far fa-id-card "></i>
        <p>Roles</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('compagnies.index') }}"
       class="nav-link {{ Request::is('compagnies*') ? 'active' : '' }}">
       <i class="fas fa-home "></i>
        <p>Compagnies</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="fas fa-user-circle "></i>
        <p>Utilisateurs</p>
    </a>
</li>
@endif

<li class="nav-item">
    <a href="{{ route('chauffeurs.index') }}"
       class="nav-link {{ Request::is('chauffeurs*') ? 'active' : '' }}">
       <i class="fas fa-user-tag "></i>
        <p>Chauffeurs</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('buses.index') }}"
       class="nav-link {{ Request::is('buses*') ? 'active' : '' }}">
       <i class="fas fa-bus-alt "></i>
        <p>Bus</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('customers.index') }}"
       class="nav-link {{ Request::is('customers*') ? 'active' : '' }}">
       <i class="fas fa-restroom "></i>
        <p>Customers</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('departcities.index') }}"
       class="nav-link {{ Request::is('departcities*') ? 'active' : '' }}">
       <i class="fas fa-flag "></i>
        <p>Lieux de départ</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('arrivalcities.index') }}"
       class="nav-link {{ Request::is('arrivalcities*') ? 'active' : '' }}">
       <i class="fas fa-flag-checkered "></i>
        <p>Lieux d'arrivée</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('days.index') }}"
       class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
       <i class="fas fa-calendar "></i>
        <p>Jours</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('times.index') }}"
       class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
       <i class="fas fa-clock "></i>
        <p>Horaires</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('itineraires.index') }}"
       class="nav-link {{ Request::is('itineraires*') ? 'active' : '' }}">
       <i class="fas fa-road "></i>
        <p>Itineraires</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('prices.index') }}"
       class="nav-link {{ Request::is('prices*') ? 'active' : '' }}">
       <i class="fas fa-money-bill-alt "></i>
        <p>Prix/trajet</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('reservations.index') }}"
       class="nav-link {{ Request::is('reservations*') ? 'active' : '' }}">
       <i class="fas fa-clock "></i>
        <p>Reservations</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tickets.index') }}"
       class="nav-link {{ Request::is('tickets*') ? 'active' : '' }}">
       <i class="fas fa-file-alt"></i>
        <p>Tickets</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('paiements.index') }}"
       class="nav-link {{ Request::is('paiements*') ? 'active' : '' }}">
       <i class="fas fa-handshake "></i>
        <p>Paiements</p>
    </a>
</li>


