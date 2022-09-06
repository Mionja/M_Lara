  <header class="d-block">
    <nav class="navbar navbar-expand-lg navbar-default bg-dark">
        <a class="navbar-brand text-light" href="{{route('task.index')}}" style="font-family: 'Oleo Script Swash Caps', 'cursive'; font-size:1.8em;">
            <img src="{{asset('img/logo1.png')}}" alt="" width="50">
        </a>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item mr-5">
                    <a class="nav-link text-light" href="#">
                        <img src="{{asset('img/manage.png')}}" alt="" style="" width="25">
                        Manage your tasks</a>
                </li>         

                <li class="nav-item">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Log out</button>
                        </form>
                </li>
         
            </ul>
        </div>
    </nav>
</header>