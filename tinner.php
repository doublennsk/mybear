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
        <link rel="stylesheet" href="tininner.css">    
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
                                <li><a href="index.php" class="nav-link" id="home-link">หน้าหลัก</a></li>
                                <li><a href="about.php" class="nav-link" id="about-link">เกี่ยวกับเรา</a></li>
                                <li><a href="product.php" class="nav-link" id="services-link" style="color: #71aadd; font-weight: bold;">สินค้าของเรา</a></li>
                            </ul>
                        </nav>
                </div>        
            </div>
        </section>
    </header>

       <br>
        <div class="background-product">
            <div class="head-product">
                <h4>หมวดหมู่สินค้า</h4>   
            </div>
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
            <div class="container">    
                <div class="product">
                    <div class="img-product">
                        <div class="bg-img">
                        <img src="image/tinner 3a.png" width="100%">
                        </div>
                        <h5>ทินเนอร์ 3A</h5>
                        <p>Thinner 3A ทินเนอร์ 3 เอ. ทินเนอร์ชนิดแห้งเร็ว</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 220.00 บาท</p>
                        </div>
                                
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/image1.png" width="100%">
                        </div>
                        <h5>ทินเนอร์อะคริลิค 3602</h5>
                        <p>ทินเนอร์ อะครีลิค 3602 S (DINCO) ลูไซท์</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 280.00 บาท</p>
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