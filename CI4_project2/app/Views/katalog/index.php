<?= $this->extend('layout/katalog'); ?>
<?= $this->section('katalog'); ?>


<nav class="navbar">
    <div id="main">
        <button class="open-btn" onclick="openNav()">☰ </button>
    </div>

    <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search....">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <div class="menu">
        <div class="menu-links">
            <a href="Home">Home <i class="i-home fi fi-rr-home"></i></a>
            <a href="<?= base_url('katalog') ?>">Belanja <i class=" i-belanja fi fi-rr-shopping-bag "></i></a>
            <a href="#" id="aboutLink">About <i class="i-about fi fi-rr-interrogation"></i></a>
            <a href="#">Contact <i class="i-contact fi fi-rr-phone-call"></i></a>
            <a href="#">Keranjang <i class="i-keranjang fi fi-rr-shopping-cart"></i> </a>
        </div>
        <div class="profil">
            <div class="profil-u">
                <a href="#"><i class="i-user fi fi-rr-user"></i></a>
            </div>
        </div>
        <div class="menu">
            <?php if ($auth->loggedIn()) : ?>

                <li class="menu-item hidden"><a href="<?php echo site_url('auth/logout') ?>"><button class="log-in">Logout ( <?php echo $currentUser->first_name ?> )</button></a></li>
            <?php else : ?>
                <a href="<?= base_url('auth/login') ?>"><button class="log-in">Log in</button></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="menu-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
</nav>

<div class="body">
    <div class="sidebar" id="mySidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <h2>Categories</h2>
        <a href="#" onclick="filterItems('baju')">Baju</a>
        <a href="#" onclick="filterItems('celana')">Celana</a>
        <a href="#" onclick="filterItems('dress')">Dress</a>
        <h2>Ukuran</h2>
        <label><input type="checkbox" onclick="filterItemsBySize('s')"> S</label>
        <label><input type="checkbox" onclick="filterItemsBySize('m')"> M</label>
        <label><input type="checkbox" onclick="filterItemsBySize('l')"> L</label>
        <label><input type="checkbox" onclick="filterItemsBySize('xl')"> XL</label>
    </div>

    <div class="background">
        <div class="centering">
            <div class="articles">
                <article>
                    <figure>
                        <img src="<?= base_url('/image/p1.jpeg') ?>" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 1</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Praesent in mauris eu tortor porttitor accumsan.
                            <a href="#" class="read-more" title="Read More">
                                Beli
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 2</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Praesent in mauris eu tortor porttitor accumsan.
                            <a href="#" class="read-more" title="Read More">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/tropical-beach_74190-188.jpg?w=1800&t=st=1687169672~exp=1687170272~hmac=b66f9b9c1e344cbfe6fe2e5f65e94ebb8d418dad2e2af2b892ad9ac60e9eb79c" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 3</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.

                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/pathway-middle-green-leafed-trees-with-sun-shining-through-branches_181624-4539.jpg?w=900&t=st=1687123477~exp=1687124077~hmac=6e8b1735a2cb25be79f248b6a3307a37a15b080dee114565d01704b97d432a80" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 4</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.

                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/beautiful-paradise-island-with-beach-sea_74190-1023.jpg?w=1800&t=st=1687169691~exp=1687170291~hmac=7a65a4e5b2eb374e94e17fd7fb2ab0d1b7b7aaf83078cd62ed5d0a84b66d5beb" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 5</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/empty-wood-chair-table-outdoor-patio-with-beautiful-tropical-beach-sea_74190-9961.jpg?w=1800&t=st=1687169720~exp=1687170320~hmac=0a77994214a9019510f28af43dab452ada527e96585d6e7f563a09995598851e" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 6</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.

                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/view-mountains-landscape-huesca_1398-5217.jpg?w=2000&t=st=1687169991~exp=1687170591~hmac=aa445998f8b6570cab3abc9d68853ab80ba944475fcbc05c70c6061f967ab9f7" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 7</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.

                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/beautiful-shot-snowy-hill-surrounded-by-mountains-with-light-pink-sky_181624-4102.jpg?w=2000&t=st=1687169963~exp=1687170563~hmac=b811dc16315ec7776b847588539208c1d57e43df80f7319aeb9b55ed7322784b" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 8</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.

                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
                <article>
                    <figure>
                        <img src="https://img.freepik.com/free-photo/beautiful_1203-2633.jpg?w=2000&t=st=1687169925~exp=1687170525~hmac=4e1fdddf8ca048eaa100d431639d165f115cd16cea95feff591fbecdc3b28d4c" alt="Preview">
                    </figure>
                    <div class="article-preview">
                        <h2>My Blog 9</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent in mauris eu tortor porttitor accumsan.

                            <a href="#" class="read-more">
                                Read more
                            </a>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h4>company</h4>
                <ul>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">our services</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?= $this->endSection(); ?>