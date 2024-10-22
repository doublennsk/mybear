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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="index.css">  
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

        <div class="head-banner">
            <div class="banner">
                <img src="image/banner.png" width="100%">
            </div>    
        </div>
        
        <div class="bg-information">
            <div class="infomation">
                <div class="header-infor">
                    <h2>ร้านศิรินกานต์เพ้นท์</h2>
                    <p>จำหน่ายสินค้าประเภทพ่นรถยนต์และสินค้าที่ใช้ประกอบกัน </p>
                </div>
                
            </div>


            <div class="container">
                <div class="paint-item">
                    <div class="paint-list">
                        <div class="paint-mess">
                            <h4>สีพ่นรถยนต์</h4>
                        </div>
                        <div class="paintcar-img">
                            <img src="image/paintcar.png" width="30%">
                        </div>
                    </div>
                    <div class="paint-list">
                        <div class="paint-mess">
                            <h4>อุปกรณ์</h4>
                        </div>
                        <div class="diver-img">
                            <img src="image/device.png" width="100%">
                        </div>
                    </div>
                </div>
            </div> 
        </div>        

        <div class="bg-content">
            <div class="container-fluid">
                <div class="con-title">
                    <div class="content">
                        <img src="image/imgcontent.png">
                    </div>

                    <div class="content">
                        <p>สีเป็นองค์ประกอบที่สำคัญ ในการทำให้รถยนต์แต่ละคันมีความสวยงาม 
                            และสร้างเสน่ห์ให้แก่รถยนต์ที่เราขับขี่ ในการซ่อมสีนั้นการเลือกใช้สีพ่นรถยนต์
                            ให้เหมาะสมกับการใช้งานย่อมหมายถึงความคงทน ความมันวาวของสี ที่จะติดอยู่กับตัวรถยนต์ 
                            และบ่งบอกถึงความเป็นตัวตนของผู้ครอบครองรถคันนั้นๆ ได้เป็นอย่างดี </p>
                    </div>  
                </div> 
            </div>
        </div> 
        
        
        <div class="background-border">
            <div class="Product-categories">    
                <div class="container">
                    <div class="head-categories">
                        <h2>หมวดหมู่สินค้า</h2>
                        <p>เลือกชมสินค้าตามหมวดหมู่ที่สนใจ</p>
                    </div>
                </div>
            </div>
                
            <div class="slide-productcategorie">
                <div class="container swiper">
                    <div class="card-wrapper">
                        <ul class="card-list swiper-wrapper">
                            <li class="card-item swiper-slide">
                                <div class="card-link">
                                    <img src="image/putty.png" alt="Card Image" class="card-image">
                                    <h2 class="card-title">สีโป๊ว (Putty)</h2>
                                    <a href="Putty.php"><p>ดูเพิ่มเติม</p></a>
                                </div>
                            </li>

                            <li class="card-item swiper-slide">
                                <div class="card-link">
                                    <img src="image/lager.png" alt="Card Image" class="card-image">
                                    <h2 class="card-title">แลกเกอร์ (Lagger)</h2>
                                    <a href="Lagger.php"><p>ดูเพิ่มเติม</p></a>
                                </div >
                            </li>

                            <li class="card-item swiper-slide">
                                <div class="card-link">
                                    <img src="image/scrubber.png" alt="Card Image" class="card-image">
                                    <h2 class="card-title">ยาขัด (Scrubber)</h2>
                                    <a href="Scrubber.php"><p>ดูเพิ่มเติม</p></a>
                                </div >
                            </li>

                            <li class="card-item swiper-slide">
                                <div class="card-link">
                                    <img src="image/tinner.png" alt="Card Image" class="card-image">
                                    <h2 class="card-title">ทินเนอร์ (Tinner)</h2>
                                    <a href="Tinner.php"><p>ดูเพิ่มเติม</p></a>
                                </div >
                            </li>

                            <li class="card-item swiper-slide">
                                <div class="card-link">
                                    <img src="image/base.png" alt="Card Image" class="card-image">
                                    <h2 class="card-title">สีรองพื้น (Base)</h2>
                                    <a href="Base.php"><p>ดูเพิ่มเติม</p></a>
                                </div>
                            </li>
                                                    
                        </ul>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="background-product">
            <div class="head-product">
                <h4>สินค้าของเรา</h4>   
            </div>

            <div class="container">            
                <div class="product">
                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/acrylic.png" width="100%">
                        </div>
                        <h5>สีโป๊วเหลือง RGB</h5>
                        <p> สีโป๊วเหลือง RGB เนื้อบางเนียน Polyester Putty 88-6600 ขนาด 3.725kg</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 290.00 บาท</p>
                        </div>
                                
                    </div>

                    <div class="img-product">
                        <div class="bg-img">
                            <img src="image/Polyester Putty.png" width="100%">
                        </div>
                        <h5>สีรองพื้น KURUMA 4:1</h5>
                        <p>สีรองพื้นเกาะเหล็ก KURUMA 1K อะคริลิค (สีเทา) สีพ่นรองพื้นคูลูม่าร์ ขนาด 4 ลิตร</p>
                        <div class="pro-p">
                            <p><i class='bx bx-dollar'></i> 290.00 บาท</p>
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
                </div>
                <div class="bg-view">
                    <div class="bor-view">
                        <div class="head-viewmore">
                        <a href="product.php" class="btn" role="button">ดูเพิ่มเติม</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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




       <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

       <script src="scriptjs.js"></script>

       
    </body>
</html>