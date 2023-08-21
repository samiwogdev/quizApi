
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ ('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
        <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
</head>

<body>
    <div id="app">
       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Question</th>
                          <th scope="col">Option A</th>
                          <th scope="col">Option B</th>
                          <th scope="col">Option C</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($questions as $question)
                          <tr>
                              <td>{{ $question->question }}</td>
                              <td>{{ $question->answer_a }}</td>
                              <td>{{ $question->answer_b }}</td>
                              <td><td>{{ $question->answer_c }}</td></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
            </div>
        </div>
       </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
</body>
</html>
