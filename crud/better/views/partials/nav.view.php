<nav id="mainNav" class="navbar bg-dark navbar-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <div class="mx-auto"></div>
            <ul class="navbar-nav navbar-nav-scroll text-white" style="--bs-scroll-height: 100%">
                <li class="nav-item">
                    <a class="nav-link py-2" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link py-2" href="/articles/create">Write Now</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="popularpost.html">Popular Post</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="recentpost.html">Recent Post</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="tagpost.html">Tags</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item py-2">
                    <form class="d-flex d-lg-none" role="search">
                        <input class="form-control me-2 input-group-sm" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-sm btn-outline-warning" type="submit">
                            Search
                        </button>
                    </form>
                </li>
                <?php if (isset($_SESSION['is_user_logged_in']) && $_SESSION['is_user_logged_in'] === true): ?>
                <li class="nav-item py-1">
                    <span><?php echo $_SESSION['logged_in_user_name'] ?? '---'; ?></span>
                    <a class="btn btn-secondary" href="/logout" role="button">Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item py-1">
                    <a class="btn btn-secondary" href="/login" role="button">Login</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>