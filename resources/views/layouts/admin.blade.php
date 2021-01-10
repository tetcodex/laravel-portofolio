<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Bootstrap core Javascript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

    <!-- Website CSS -->
    <link href="/css/main.css" rel="stylesheet">

    <!-- Website Javascript -->
    <script src="/js/typed.js" type="text/javascript"></script>
    <script src="/js/main.js" type="text/javascript"></script>
    <script src="https://snapwidget.com/js/snapwidget.js"></script>

</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <div class="card">
            <div class="card-header text-left">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="/img/icons/logout.svg" alt="" width="16" height="16" title="logout">
                </button>
                <h5 class="card-title"> Hi, User </h5>
                <nav class="d-flex justify-content-right">
                    <a class="nav-link" href="/restricted/">
                        <h6 class="card-title">Home</h6>
                    </a>
                    <a class="nav-link" href="/restricted/article/">
                        <h6 class="card-title">Article</h6>
                    </a>
                </nav>
        </div>
        <main role="main" class="inner cover">
            @yield('section')
        </main>
    </div>
    <x-footer />
</body>

</html>