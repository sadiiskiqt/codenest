<nav class="w3-sidenav w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidenav">
    <div class="w3-container w3-padding-8">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-closebtn w3-hover-text-red"></i>
        <h3>Hi: {{\Auth::user()->name}}</h3>
        <h3>Create Your ToDo</h3>

        <h6>
            <a href="{{ url('/home') }}">Home</a>
        </h6>
        <h6>
            <a href="mylist">My Todo List</a>
        </h6>
        <h6>
            <a href="logout">Logout</a>
        </h6>
        <hr>
    </div>
</nav>