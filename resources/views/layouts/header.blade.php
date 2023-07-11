<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request() -> is ('/') ? 'active': ''}}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request() -> is ('about') ? 'active': ''}}" href="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request() -> is ('profolio') ? 'active': ''}}" href="profolio">Profolio</a>
            </li>   
            <li class="nav-item">
                <a class="nav-link {{ request() -> is ('contact') ? 'active': ''}}" href="contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>