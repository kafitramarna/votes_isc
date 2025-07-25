<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/css/tabler.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@1.3.2/dist/js/tabler.min.js"></script>
</head>

<body>
    <div class="page">
        <header class="navbar navbar-expand-sm navbar-light d-print-none">
            <div class="container-xl">
                <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href="#">
                        <img src="/static/logo.svg" width="110" height="32" alt="Tabler"
                            class="navbar-brand-image" />
                    </a>
                </h1>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0">
                            <span class="avatar avatar-sm"
                                style="background-image: url(/static/avatars/002m.jpg)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Paweł Kuna</div>
                                <div class="mt-1 small text-secondary">UI Designer</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

</body>

</html>
