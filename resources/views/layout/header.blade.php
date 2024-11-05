<div class="row">
    <div class="col-6 bg-light d-flex align-items-center" >
        <img src="{{ asset('img/logo.png') }}" class="img-fluid" alt="..." width="120" height="auto">
    </div>
    <div class="col-6 d-flex align-items-center bg-light ">
        <nav class="navbar navbar-expand-sm navbar-light fw-bolder text-dark">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('admin.home') }}">Home</a>
                </li>

                    <li class="nav-item dropdown me-5">
                        <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light">
                            <li><a class="dropdown-item" href="{{ route('admin.catmulmed') }}">Interactive Multimedia</a></li>
                            <li><a class="dropdown-item" href="{{ route('admin.catsofteng') }}">Software Engineering</a></li>
                        </ul>
                    </li>

                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('admin.writers') }}">Writers</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('admin.aboutus') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">Popular</a>
                </li>                
            </ul>
        </nav>
    </div>
    
</div>