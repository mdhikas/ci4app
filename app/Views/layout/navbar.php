<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Muhammad Dhika</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/pages/about">About</a>
                <a class="nav-link" href="/pages/contact">Contact</a>
                <a class="nav-link" href="/komik">Komik</a>
                <a class="nav-link" href="/orang">Orang</a>
            </div>
            <div class="navbar-nav">
                <?php if (logged_in()) : ?>
                    <a href="/logout">Logout</a>
                <?php else : ?>
                    <a href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>