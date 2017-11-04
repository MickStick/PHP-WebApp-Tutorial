<nav class="My-navbar">
    <div class="route-container">
        <ul class="routes" style="list-style-type: none">
            <li class="route-item">
                <form action="controller/RequestController.php?view=home.php" method="GET" class="routeform" target="RequestHandler">
                    <input type="text" name="view" value="home.php"/>
                    <button href="" class="route" >Home</button>
                </form>                
            </li>
            <li class="route-item">
                <form action="controller/RequestController.php" method="GET" class="routeform" target="RequestHandler">
                    <input type="text" name="view" value="login.php"/>
                    <button href="" class="route" >Login</button>
                </form>                
            </li>
            <li class="route-item">
                <form action="controller/RequestController.php" method="GET" class="routeform" target="RequestHandler">
                    <input type="text" name="view" value="register.php"/>
                    <button href="" class="route" >Register</button>
                </form>                
            </li>
        </ul>
    </div>
</nav>