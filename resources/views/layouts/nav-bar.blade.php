<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{ url('/') }}"><img
                    src="{{ asset('build/assets/img/logo.png') }}" class="img-responsive" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="active">
                    <a class="page-scroll" href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('blog') }}">Blog</a>
                </li>
                <li>
                    <a class="page-scroll" href=" {{ url('coaches') }}">Coaches</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('schedule') }}">Schedule</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{ url('contact') }}">Contact</a>
                </li>
            </ul>
            @if (Auth::check())
                <ul class="dash-ul">
                    <li class="pull-right dashboard">
                        <a class="page-scroll" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            @endif

        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
