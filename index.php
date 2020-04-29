<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./data/css/jquery.bxslider.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" media="screen and (max-width: 955px)" href="./data/css/sm-then-955.css">
    <link rel="stylesheet" media="screen and (max-width: 915px)" href="./data/css/sm-then-915.css">
    <link rel="stylesheet" media="screen and (max-width: 576px)" href="./data/css/sm-then-576.css">
    <script src="./data/js/jquery.min.js"></script>
    <script src="./data/js/jquery.bxslider.min.js"></script>
    <script src="./data/js/script.js" defer></script>
    <!-- <script src="./data/js/jquery-ui.min.js"></script> -->
    <title>Fesco</title>
</head>

<body>
    <div class="whole-site">
        <header id="up">
            <div class="wrap">
                <nav class="flex flex-between">
                    <span class="logo">
                        <a href="index.html">Fesco</a>
                    </span>
                    <ul class="flex" id="showNav">
                        <li><a class="smoothscroll" href="#up">Home</a></li>
                        <li><a class="smoothscroll" href="#about">About Us</a></li>
                        <li><a class="smoothscroll" href="#menu">Menu</a></li>
                        <li><a class="smoothscroll" href="#reservation">Reservations</a></li>
                        <li><a class="smoothscroll" href="#contacts">Contact</a></li>
                        
                    </ul>
                    <ul id="mobNav" class="mob_nav">
                        <li><div class="hamburger"><span></span></div></li>
                    </ul>
                </nav>
                <div class="flex">
                    <div class="title">
                        <img src="data/img/Icon.svg" alt="icon">
                        <h2>making food taste better.</h2>
                        <h4>italian specialities</h4>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                            <br>
                            cubilia curae</p>
                    </div>
                    <a class="smoothscroll up_btn" href="#up">UP</a>
                    <div class="contact">
                        <span>Contact</span>
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                        <p class="uppercase">address:</p>
                        <p>17 Awesome Street, Belgrade
                            <br>
                            SR 877900
                        </p>
                        <a href="#">veiw map</a>
                        <p class="uppercase">opening hours</p>
                        <p>Monday - Friday...........8:00am-11:00pm
                            <br>
                            Saturday - Sunday...........8:00am-10:00pm
                        </p>
                        <div class="btn_holder">
                            <button class="table_btn">Table Reservation</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="about flex wrap">
            <div class="about_us" id="about">
                <article>
                <h2>about us</h2>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                <p>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta.</p>
                <p>Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, dictum porta.</p>
                </article>
            </div>
            <picture>
                <source type="image/webp" srcset="data/img/restaurant.webp">
                <img src="./data/img/restaurant_02_sm.jpg" class="grey" alt="restaurant">
            </picture>    
        </section>
        <section class="spec">
            <div class="wrap">
                <h2 class="width627">our specialities</h2>
                <p class="width627 par">Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt.</p>
                <ul class="bxslider">
                    <li>
                        <picture>
                            <source type="image/webp" srcset="data/img/lazania.webp">
			    <img class="slide" src="data/img/lazania.jpg" alt="food"/>
			</picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" srcset="data/img/lazania.webp">
			    <img class="slide" src="data/img/lazania.jpg" alt="food"/>
			</picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" srcset="data/img/lazania.webp">
			    <img class="slide" src="data/img/lazania.jpg" alt="food"/>
			</picture>
                    </li>
                    <li>
                        <picture>
                            <source type="image/webp" srcset="data/img/lecter.webp">
			    <img class="slide" src="data/img/Hannibal_Lecter_min.png" alt="food"/>
			</picture>
                    </li>
                    <!-- <li><img class="slide" src="data/img/lecter.webp" alt="food"></li> -->
                </ul>
            </div>
        </section>
        <!-- MENU -->
        <section class="menu" id="menu">
            <div class="wrap">
                <h2 class="menuh">our menu</h2>
                <p class="menup">Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                <h3 class="uppercase">..........pizza..........</h3>
                <div class="flex content_menu">
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">mexicana</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$19</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">mexicana</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$19</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">margharita</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$16</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">margharita</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$16</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">hawaian</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$18</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">hawaian</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$18</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">chicken</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$14</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">chicken</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$14</span>
                    </div>
                </div>
                <h3 class="uppercase">..........deserts..........</h3>
                <div class="flex content_menu desert">
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">CHOCOLATE HAZELNUT CHEESECAKE</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$7</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">CHOCOLATE HAZELNUT CHEESECAKE</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$7</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">BANOFFEE TIRAMISU</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$11</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">BANOFFEE TIRAMISU</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$11</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">STICKY TOFFEE PUDDIN</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$13</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">STICKY TOFFEE PUDDIN</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$13</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">PANNA COTTAS</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$14</span>
                    </div>
                    <div class="flex menu1">
                        <div class="submenu1">
                            <h5 class="uppercase">PANNA COTTAS</h5>
                            <span>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.............................</span>
                        </div>
                        <span class="price">$14</span>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">veiw all menu</a>
        </section>
        <!-- RESERVATION -->
        <section class="reservation" id="reservation">
            <div class="wrap">
                <h2>book a table</h2>
                <p>Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
                <form action="#">
                    <div class="flex flex-between reserv">
                        <div class="reserv_block">
                            <label for="datepicker"><h5 class="uppercase">choose a date</h5></label>
                            <div class="miniwrap">
                                <input id="datepicker" type="date" value="">
                            </div>
                        </div>
                        <div class="reserv_block">
                            <label for="time"><h5 class="uppercase">choose a time</h5></label>
                            <div class="miniwrap timewrap">
                                <input id="time" type="time" value="<?php echo date('H:i'); ?>">
                            </div>
                        </div>
                        <div class="reserv_block">
                            <label for="number"><h5 class="uppercase">number of people</h5></label>   
                            <div class="miniwrap">
                                    <select name="number">
                                        <option value="1">1</option>
                                        <option value="2" selected>2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="max">more then 5</option>
                                    </select>
                                </div>    
                        </div>
                    </div>
                    <input type="submit" class="reserv_btn" value="book now">
                </form>
            </div>
        </section>
        <!-- FOOTER -->
        <footer>
            <div class="last_block" id="contacts">
                <div class="wrap">
                    <div class="flex flex-between foot">
                        <div class="contact_block lh">
                            <h5 class="uppercase">address:</h5>
                            <p>17 awesome street, Belgrade
                                <br>
                                SR 877900
                            </p>
                            <div class="a_like_btn">
                                <a class="foot table_btn" href="#">view map</a>
                            </div>
                        </div>
                        <div class="contact_block">
                            <h5 class="uppercase">opening hours:</h5>
                            <p>Monday - Friday......................................8:00am - 11:00 pm
                                <br>
                                Saturday - Sunday....................................8:00am - 10:00 pm
                            </p>
                            <button class="table_btn">table reservation</button>
                        </div>
                        <div class="social contact_block">
                            <h5 class="uppercase">WE ARE SOCIAL:</h5>
                            <p>Feel free to check our social media 
                                <br>
                                pages
                            </p>
                            <div class="socials">
                                <a href="#" class="facebook"><span class="sr_only">facebook</span></a>
                                <a href="#" class="twitter"><span class="sr_only">twitter</span></a>
                                <a href="#" class="google"><span class="sr_only">google</span></a>
                                <a href="#" class="youtube"><span class="sr_only">youtube</span></a>
                            </div>
                        </div>
                    </div>
                    <span></span>
                </div>
            </div>
        </footer>
    </div> 
    <script>
       


    </script>          
</body>

</html>
	