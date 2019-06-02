<!-- Add in the header html -->
<?php
	require "header.php";
?>		

		<!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <!-- Carousel Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <!-- Carousel Indicators -->

            <div class="carousel-inner" role="listbox">

                <!-- Slide One : Gypsys Tale -->
                <div class="carousel-item active" style="background-image: url(images/gypsystalescreenshot.png);">
                    <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
                        <a href="chatrooms.php">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Gypsy's Tale - Chatroom</h3>
                                <p style="margin-bottom: 0px;">Chat with friends and other fans about the third-person adventure game, where</p>
                                <p style="margin-bottom: 0px;">players take control of Gypsy, an inquisitive, cheeky Golden Retriever.</p>
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Slide One : Gypsys Tale -->

                <!-- Slide Two : Toy Wars  -->
                <div class="carousel-item" style="background-image: url(images/toywarsscreenshot.png)">
                    <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
                        <a href="chatrooms.php">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Toy Wars: Un-Bear-Able Warefare - Chatroom</h3>
                                <p style="margin-bottom: 0px;">Chat with friends and other fans about the game that pits two hot-seated players</p>
                                <p style="margin-bottom: 0px;">against each other in a turn-based PvP combat environment.</p>
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Slide Two : Toy Wars  -->
                
                <!-- Slide Three : Zombie Game  -->
                <div class="carousel-item" style="background-image: url(images/zombiegif.gif)">
                    <div style="background: rgba(0, 0, 0, 0.3); width:100%; height:100%;">
                        <a href="chatrooms.php">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Zombie Game - Chatroom</h3>
                                <p style="margin-bottom: 0px;">Chat with friends about the popular retro-style top-down zombie survival shooter.</p>
                                <p style="margin-bottom: 0px;">retro-style top-down zombie survival shooter.</p>
                                <p></p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Slide Three : Zombie Game  -->

            </div>

            <!-- Prev Button -->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <!-- Prev Button -->
            <!-- Next Button -->
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!-- Next Button -->

        </div>
        <!-- Carousel -->

<!-- Add in the footer html -->
<?php
	require "footer.php";
?>