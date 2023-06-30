<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
        <li class="nav-item rounded">
          <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill me-2"></i>Home</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{ route('client')}}"><i class="bi bi-people-fill me-2"></i>Clients</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{route('form1')}}"><i class="fab fa-wpforms me-2"></i>Property Form</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{route('form2')}}"><i class="fab fa-wpforms me-2"></i>Leasing Form</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{route('form3')}}"><i class="fab fa-wpforms me-2"></i>Vendor Form</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{route('form4')}}"><i class="fab fa-wpforms me-2"></i>Purchaser Form</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{route('form5')}}"><i class="fab fa-wpforms me-2"></i>Landlord Form</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="{{route('form6')}}"><i class="fab fa-wpforms me-2"></i>Tenant Form</a>
        </li>
        <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Profile</a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <!-- <li><a class="dropdown-item" href="#">Account</a></li> -->
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>