<header>
    <div class="container-fluid bg-red px-0">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-dark px-4 py-lg-0">
                <h4 class="d-lg-none m-0">Menu</h4>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto">
                        <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                        <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                        <a href="/contact" class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                        <div class="nav-item dropdown">
                            <a href="#!" class="nav-link dropdown-toggle" id="pagesDropdown" data-bs-toggle="dropdown" aria-expanded="false">Languages</a>
                            <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <li><a class="dropdown-item text-danger" href="#">Indonesian</a></li>
                                <li><a class="dropdown-item text-danger" href="#">English</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Turkish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="d-none d-lg-flex ms-auto">
                        <a class="btn round-btn btn-white ms-2" style="cursor: pointer; transform: scale(0.8)" href="https://www.tiktok.com/@ppi.kastamonu" target="_blank" rel="noopener noreferrer"><i class="fab fa-tiktok text-beige"></i></a>
                        <a class="btn round-btn btn-white ms-2" style="cursor: pointer; transform: scale(0.8)" href="https://www.instagram.com/ppikastamonu/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram text-beige"></i></a>
                        <a class="btn round-btn btn-white ms-2" style="cursor: pointer; transform: scale(0.8)" href="https://www.youtube.com/@ppikastamonu2021" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube text-beige"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>