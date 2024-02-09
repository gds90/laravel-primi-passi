<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>About us</title>
</head>

<body>
    <header>
        <div class="container bg-primary">
            <div class="row">
                <div class="col-3 fs-3 py-4 text-white">{{ $app_name }}</div>
                <div class="col-9">
                    <ul class="list-unstyled d-flex py-4">
                        <li class="me-3">
                            <a class ="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="text-white">
                            <a class ="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                                href="{{ route('team') }}">Our Team</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 text-left my-4">
                    <h3>Un po' di storia:</h3>
                    <p>La nostra azienda nasce nel 1978 ...</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
