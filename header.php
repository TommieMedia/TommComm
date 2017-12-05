	<script>
		$(document).ready(function() {
			// Toggle the mobile navigation in and out of view
			var mnav = false;
			$("#hicon").click(function(){
				if (!mnav) {
					$("#nav").css("display", "block");
				}
				else {
					$("#nav").css("display", "none");
				}
				mnav = !mnav;
			});
		});
	</script>
	<a name="top"></a>	

        <nav>
        <div id="logo">
 			<a href="index.php"><img src="images/logo.png" class="logo"></a>
        </div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li>
                    <!-- First Tier Drop Down -->
                    <label for="drop-1" class="toggle">About</label>
                    <a href="#">About</a>
                    <input type="checkbox" id="drop-1"/>
                    <ul>
                        <li><a href="story.php">Our Story</a></li>
                        <li><a href="team.php">Our Team</a></li>
                    </ul> 

                </li>
                <li><a href="clients.php">Clients</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="students.php">Employment</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
