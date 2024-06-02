<nav>
<div class="topnav" id="myTopnav">
    <a class="nav-link" href="#" id="userProfile" role="button">
        <span class="">{{Auth::user()->name}}</span>
    </a>
    <a class="nav-link me-3 me-lg-0" href="#">
        <i class="fas fa-bell fa-xl"></i>
    </a>
    <a class="nav-link" href="#">
        <i class="fab fa-github fa-xl"></i>
    </a>
    <a class="nav-link me-3 me-lg-0" href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();" title="Logout">
        <i class="fa-solid fa-arrow-right-from-bracket fa-xl"></i>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars fa-xl"></i>
    </a>
</div>
</nav>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>