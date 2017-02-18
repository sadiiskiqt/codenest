<nav class="w3-sidenav w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidenav">
    <div class="w3-container w3-padding-8">
        <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-closebtn w3-hover-text-red"></i>
        <h3>Rental</h3>
        <h3>from $99</h3>
        <h6><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a></h6>
        <hr>
        <form action="/action_page.php" target="_blank">
            <p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
            <p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
            <p><label><i class="fa fa-male"></i> Adults</label></p>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
            <p><label><i class="fa fa-child"></i> Kids</label></p>
            <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
            <p>
                <button class="w3-btn-block w3-green w3-padding w3-left-align" type="submit"><i
                            class="fa fa-search w3-margin-right"></i> Search availability
                </button>
            </p>
        </form>
    </div>
    <a href="#apartment" class="w3-padding-16"><i class="fa fa-building"></i> Apartment</a>
    <a href="javascript:void(0)" class="w3-padding"
       onclick="document.getElementById('subscribe').style.display='block'"><i class="fa fa-rss"></i> Subscribe</a>
    <a href="#contact" class="w3-padding-16"><i class="fa fa-envelope"></i> Contact</a>
</nav>