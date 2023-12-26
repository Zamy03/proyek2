<?= $this->extend('layout/dashboard'); ?>

<?= $this->section('dashboard'); ?>

<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fa-solid fa-font-owesome"></i>
            <a href="#">SHOJU</a>
        </div>
        <div class="menu">
            <div class="menu-links">
                <a href="Home">Home <i class="i-home fi fi-rr-home"></i></a>
                <a href="<?= base_url('katalog') ?>">Belanja <i class=" i-belanja fi fi-rr-shopping-bag "></i></a>
                <a href=" #" id="aboutLink">About <i class="i-about fi fi-rr-interrogation"></i></a>
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

    <!-- banner -->
    <div class="banner" id="home1">
        <div class="content-banner">
            <h3>fashions fade <span>style is eternal</span></h3>
        </div>
    </div>


    <!-- content-1 -->
    <section class="content-1" id="card">
        <div class="container-card">
            <div class="card" style="--clr: #009688">
                <div class="img-box">
                    <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="content">
                    <h2>Celana</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Architecto, hic? Magnam eum error saepe doloribus corrupti
                        repellat quisquam alias doloremque!
                    </p>
                    <a href="">Read More</a>
                </div>
            </div>
            <div class="card" style="--clr: #FF3E7F">
                <div class="img-box">
                    <img src="https://images.unsplash.com/photo-1434389677669-e08b4cac3105?q=80&w=1410&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="content">
                    <h2>Baju</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Architecto, hic? Magnam eum error saepe doloribus corrupti
                        repellat quisquam alias doloremque!
                    </p>
                    <a href="">Read More</a>
                </div>
            </div>
            <div class="card" style="--clr: #03A9F4">
                <div class="img-box">
                    <img src="https://images.unsplash.com/photo-1605763240000-7e93b172d754?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                </div>
                <div class="content">
                    <h2>Dress</h2>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        Architecto, hic? Magnam eum error saepe doloribus corrupti
                        repellat quisquam alias doloremque!
                    </p>
                    <a href="">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- content-2 -->
    <div class="content-2">
        <h1>SHOJU </h1>
        <p>Shoju adalah sebuah toko baju yang menawarkan berbagai pilihan pakaian trendy dan stylish untuk memenuhi kebutuhan fashion Anda. Dengan komitmen untuk memberikan pengalaman berbelanja yang menyenangkan dan memuaskan, Shoju menghadirkan koleksi terbaru dengan desain yang up-to-date dan kualitas yang tak tertandingi..</p>
        <a href="#">Learn more</a>
    </div>

    <div class="blank"></div>


    <div class="content-3 second">
        <div class="item">
            <div class="img-content-3 img-first"></div>
            <div class="card">
                <h3>Toko</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae cumque dolorum ducimus aut laboriosam quis itaque laborum expedita nemo ex?</p>
                <a href="#">Lihat</a>
            </div>
        </div>
        <div class="item">
            <div class="img-content-3 img-second"></div>
            <div class="card">
                <h3>Alamat</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem soluta nulla beatae dolore fugit consequuntur facere quo fugiat commodi architecto?
                </p>
                <a href="#">Lihat</a>
            </div>
        </div>
        <div class="item">
            <div class="img-content-3 img-third"></div>
            <div class="card">
                <h3>Tentang Penjual</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, temporibus repudiandae consequuntur quia minus facilis suscipit aliquam voluptate praesentium quo! </p>
                <a href="#">Lihat</a>
            </div>
        </div>
    </div>


    <!-- Footer -->
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
</body>

<?= $this->endSection(); ?>