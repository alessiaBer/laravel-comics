<header>
    <div class="header_banner bg-primary text-white py-2">
        <div class="container my_container_lg text-uppercase d-flex justify-content-end">
            <span class="d-inline-block pe-5">dc power&target; visa&comp;</span>
            <span>additional dc sites <i class="fa-solid fa-caret-down"></i></span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container my_container_lg justify-content-between px-0">
            <a class="navbar-brand" href="#">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo" height="60">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">news</a>
                    </li>
                    <!-- .dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            shop
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <div class="input-group align-self-center">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
            </div>
        </div>
    </nav>
</header>