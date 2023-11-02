<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    >

    <title>Home</title>
    <!-- DataTables -->
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css"
    >
    {{-- for dashboared --}}
    <link
        href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
        rel="stylesheet"
    >

    <!--SweetAlert -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    >
    <!-- Bootstrap CSS CDN -->
    <script
        src="{{ asset('js/app.js') }}"
        defer
    ></script>
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous"
    >

    <!-- Styles -->
    <link
        href="{{ asset('css/style.css') }}"
        rel="stylesheet"
    >
    <!-- Font Awesome JS -->
    <script
        src="https://kit.fontawesome.com/1c7f47d61e.js"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"
    ></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"
    ></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center">MR Traning Center</h3>
                <strong>MR</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="{{ 'dashboared' }}">
                        <i class="fas fa-tachometer-alt"></i>
                        Dashboared
                    </a>
                </li>
                <li>
                    <a href=" {{ 'S-Registration' }}"> <i class="fas fa-users"></i> Student Registration</a>
                </li>
                <li>
                    <a href="{{ __('student') }}">
                        <i class="fa fa-list"></i>
                        Student List
                    </a>
                </li>

                <!-- <li>
                    <a href="#">
                        <i class="fa fa-comments"></i>
                        Certificat
                    </a>
                </li> -->
                <li>
                    <a href="{{ __('home') }}">
                        <i class="fa fa-list"></i>
                        Workers List
                    </a>
                </li>
                <!-- <li>
                    <a href="#">
                        <i class="fa fa-comments"></i>
                        Comment
                    </a>
                </li> -->
                <li>
                    <a href="{{ __('profile') }}">
                        <i class="fa fa-user"></i>
                        profile
                    </a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    @if (Route::has('login'))
                        <a
                            href="#"
                            class="download text-center text-dark"
                        ><i class="fa fa-user"></i> {{ auth()->user()->name }}</a>
                    @endif

                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button
                        type="button"
                        id="sidebarCollapse"
                        class="btn btn-info"
                    >
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <button
                        class="btn btn-dark d-inline-block d-lg-none ml-auto"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">

                                <a
                                    class="dropdown-item mik"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"
                                >
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </a>

                                <form
                                    id="logout-form"
                                    action="{{ route('logout') }}"
                                    method="POST"
                                    class="d-none"
                                >
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main>
                @yield('content')
            </main>
        </div>
    </div>


</body>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    });
</script>

<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });
</script>


<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#myTable').DataTable();
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }
            var data = table.row($tr).data();

            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#email').val(data[2]);
            $('#phonenumber').val(data[3]);
            $('#address').val(data[4]);
            $("#Edit").modal('show');
        });
    });
</script>

</html>
