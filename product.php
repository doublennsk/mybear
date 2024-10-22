<!DOCTYPE html>
<html>
    <head>
        <title>สีรถยนต์ ร้านศิรินกานต์เพ้นท์</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="product.css">    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="font-family: 'Kanit';font-size: 14px;">
    <header id="topbar">
        <section class="bar">
            <div class="container">
                <div class="header">
                        <div class="head-navbar">
                            <h2>Sirikan Paint</h2>
                        </div>
                        <nav class="navbar">        
                            <ul>
                                <li><a href="index.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" id="home-link">หน้าหลัก</a></li>
                                <li><a href="about.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'about.php') ? 'active' : ''; ?>" id="about-link">เกี่ยวกับเรา</a></li>
                                <li><a href="product.php" class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'product.php') ? 'active' : ''; ?>" id="services-link">สินค้าของเรา</a></li>
                            </ul>
                        </nav>
                </div>        
            </div>
        </section>
    </header>
       <br>
        <div class="background-product">
            <div class="head-product">
                <h4>สินค้าของเรา</h4>   
            </div>
            <br>
            <?php
            $current_page = basename($_SERVER['PHP_SELF']);
            ?>
            <div class="Product-Categories">
                <a href="product.php"><button type="button" class="btn btn-outline-secondary <?php echo ($current_page == 'product.php') ? 'active' : ''; ?>">หน้าแรก</button></a>
                <a href="Putty.php"><button type="button" class="btn btn-outline-secondary <?php echo ($current_page == 'Putty.php') ? 'active' : ''; ?>">สีโป๊ว (Putty)</button></a>
                <a href="Lagger.php"><button type="button" class="btn btn-outline-secondary <?php echo ($current_page == 'Lagger.php') ? 'active' : ''; ?>">แลกเกอร์ (Lagger)</button></a>
                <a href="Scrubber.php"><button type="button" class="btn btn-outline-secondary <?php echo ($current_page == 'Scrubber.php') ? 'active' : ''; ?>">ยาขัด (Scrubber)</button></a>
                <a href="Tinner.php"><button type="button" class="btn btn-outline-secondary <?php echo ($current_page == 'Tinner.php') ? 'active' : ''; ?>">ทินเนอร์ (Tinner)</button></a>
                <a href="Base.php"><button type="button" class="btn btn-outline-secondary <?php echo ($current_page == 'Base.php') ? 'active' : ''; ?>">สีรองพื้น (Base)</button></a>
            </div>
            <br>
            <div class="container">    
                <div class="product-show">
                    <h3>สีพ่นรถยนต์</h3>
                </div>
                <div class="product">
                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/Polyester Putty.png" width="100%">
                        </div>
                        <h5>สีโป๊วเหลือง RGB</h5>
                        <p> สีโป๊วเหลือง RGB เนื้อบางเนียน Polyester Putty 88-6600 ขนาด 3.725kg</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 350.00 บาท</p>
                        </div>
                                
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/acrylic.png" width="100%">
                        </div>
                        <h5>สีรองพื้น KURUMA 4:1</h5>
                        <p>สีรองพื้นเกาะเหล็ก KURUMA 1K อะคริลิค (สีเทา) สีพ่นรองพื้นคูลูม่าร์ ขนาด 4 ลิตร</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 370.00 บาท</p>
                        </div>
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/solar.png" width="100%">
                        </div>
                        <h5>ยาขัด SOLAR</h5>
                        <p>SOLAR Extra-100 ยาขัดสี ยาขัดหยาบ ยาขัดสีโซล่า ยาขัดสีรถยนต์ ขนาดกระป๋อง</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 175.00 บาท</p>
                        </div>
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/tinner 3a.png" width="100%">    
                        </div>
                        <h5>ทินเนอร์ 3A</h5>
                        <p>ทินเนอร์ 3A AAA 100% (ตรา K STAR) ปี๊บ ขนาด 3.5 ลิตร</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 210.00 บาท</p>
                        </div>
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/morrison.png" width="100%">      
                        </div>
                        <h5>แลคเกอร์ MORRISON 4:1</h5>
                        <p>แลคเกอร์ 2K มอริสัน MORRISON 2K (เนื้อ C-7115) ระบบ 4:1 ขนาด 3.2 ลิตร </p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 370.00 บาท</p>
                        </div>
                    </div>
                </div>
                <br>
                <div class="product-show1">
                    <h3>อุปกรณ์</h3>
                </div>
                <div class="product">
                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/tape.png" width="100%">
                        </div>
                        <h5>กระดาษกาว</h5>
                        <p>กระดาษกาว 2 นิ้ว 48mm x 20yds ขาว</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 33.00 บาท</p>
                        </div>
                                
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/tape3m.png" width="100%">
                        </div>
                        <h5>กาวสองหน้า 3M</h5>
                        <p>เทปกาว 2 หน้า 3M ติดคิ้วรถยนต์ หน้ากว้าง 12มม. ยาว 10 เมตร</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 85.00 บาท</p>
                        </div>
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/newspaper.png" width="100%">
                        </div>
                        <h5>หนังสือพิมพ์</h5>
                        <p>กระดาษหนังสือพิมพ์เก่า หนัก 10 กก.</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 45.00 บาท</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <br>
        <div class="footer">
            <div class="container">
                <div class="foot">
                    <div class="foot-con">
                        <h2><i class='bx bxs-car'></i>&ensp;ศิรินกานต์เพ้นท์</h2>
                        <p>ร้านศิรินกานต์เพ้นท์ ผสมสีรถยนต์ตามตัวอย่าง
                             พร้อมจำหน่ายอุปกรณ์ทุกชนิด</p>
                        <div class="add-con">
                            <p>1/5 หมู่ 7 ตำบลสลักได อำเภอเมืองสุรินทร์ จังหวัดสุรินทร์ 32000</p>
                        </div>
                    </div>

                    <div class="foot-con">
                        <div class="about">
                            <h2>เกี่ยวกับ</h2>
                                <p>หน้าแรก</p>
                                <p>เกี่ยวกับ</p>
                                <p>สินค้า</p>
                                <p>ติดต่อ</p>
                        </div>        
                    </div>

                    <div class="foot-con">
                        <h2>ติดต่อ</h2>
                            <img src="image/QR-code.png" width="30%">
                            <p>เบอร์โทรศัพท์ : 087-9203-605</p>
                            <div class="con-p">
                                <p> : 063-7790-983</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>