<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Zalarie | Sistem Pendataan Barang</title>

	<!-- Favicon -->
	<link href="../../assets/images/favicon.png" rel="shortcut icon">

	<!-- Google Fonts - Poppins, Karla -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Karla:300,400,500,600,700" rel="stylesheet">

	<!-- Font Awesome CSS -->
	<link href="../../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Font Icons -->
	<link href="../../assets/vendor/icomoon/css/iconfont.min.css" rel="stylesheet">

	<!-- Vendor CSS -->
	<link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/vendor/animate/css/animate.min.css" rel="stylesheet">
	<link href="../../assets/vendor/dmenu/css/menu.css" rel="stylesheet">
	<link href="../../assets/vendor/hamburgers/css/hamburgers.min.css" rel="stylesheet">
	<link href="../../assets/vendor/mmenu/css/mmenu.min.css" rel="stylesheet">
	<link href="../../assets/vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
	<link href="../../assets/vendor/float-labels/css/float-labels.min.css" rel="stylesheet">

	<!-- Main CSS -->
	<link href="../../assets/css/style.css" rel="stylesheet">

</head>

<body>

	<!-- Preloader -->
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- Preloader End -->

	<!-- Page -->
	<div id="page">
		<!-- Header -->
		<header class="main-header sticky">
			<a href="#menu" class="btn-mobile">
				<div class="hamburger hamburger--spin" id="hamburger">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
			</a>
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-6">
						<div id="logo">
							<h1><a href="../index.php" title="Zalarie">Zalarie</a></h1>
						</div>
					</div>
					<div class="col-lg-9 col-6">
						<!-- Menu -->
						<nav id="menu" class="main-menu">
							<ul>
								<li><span><a href="../index.php">Beranda</a></span></li>
								<li><span><a href="../kategori/kategori.php">Kategori</a></span></li>
								<li><span><a href="../barang/barang.php">Barang</a></span></li>
								<li><span><a href="order.php">Order</a></span></li>
							</ul>
						</nav>
						<!-- Menu End -->
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->

		<!-- Sub Header -->
		<div class="sub-header">
			<div class="container">
				<h1>List Order</h1>
			</div>
		</div>
		<!-- Sub Header End -->

		<main>
			<!-- Order  -->
			<div class="order">
				<div class="container">
					<!-- Form -->
					<form action="proses_input_order.php" id="orderForm" name="orderForm" method="POST">
						<div class="row">
							<div class="col-lg-12" id="mainContent">
							<!-- Personal Details -->
								<div id="personalDetails" class="row contact-box">
                                    <div class="contact-box-header">
										<h3>Input Order</h3>
									</div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="id_order">ID Order</label>
                                            <input id="id_order" class="form-control" name="id_order" type="text" required maxlength="11"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card mt-2 mb-2">
                                            <div class="card-header">
                                                <h6>Detail Order
                                                    <a href="javascript:void(0);" class="add-more-form float-right btn btn-primary btn-sm">Tambah Barang</a>
                                                </h6>  
                                            </div>
                                            <div class="card-body">
                                                    <div class="main-form border-bottom">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <select class="wide" name="id_barang[]" id="id_barang" required>
                                                                    <option value="">Pilih Barang</option>
                                                                    <?php
                                                                        include '../koneksi.php';
                                                                        $query = "SELECT * FROM barang";
                                                                        $result = mysqli_query($koneksi, $query);
                                                                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)):;
                                                                    ?>
                                                                    <option value="<?php echo $row['kode_barang'];?>"><?php echo $row['nama'];?></option>
                                                                    <?php
                                                                        endwhile;
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-lg-12 mt-2">
                                                                <div class="form-group">
                                                                    <label for="quantity">Kuantitas Barang</label>
                                                                    <input id="quantity" class="form-control" name="quantity[]" type="text" required maxlength="50"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="paste-new-forms"></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-2">
                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input id="tanggal" class="form-control" name="tanggal" type="date" required/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <input id="status" class="form-control" name="status" type="text" required maxlength="50"/>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="total">Total</label>
                                            <input id="total" class="form-control" name="total" type="text" required maxlength="5"/>
                                        </div>
                                    </div>
								</div>
						
								<!-- Personal Details End -->
								<div class="col-lg-4" style="margin: 0 auto ;" >
									<!-- Order Container -->
										<div class="row">
											<div class="col-lg-12">
                                                <button class="btn-form-func" type="submit" name="simpan_data_order">
													<span class="btn-form-func-content">SIMPAN ORDER BARU</span>
													<span class="icon"><i class="fa fa-floppy-o" aria-hidden="true"></i></span>
                                                </button>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
												<a href="order.php" class="btn-form-func btn-form-func-alt-color" role="button">
													<span class="btn-form-func-content">KEMBALI</span>
													<span class="icon"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
												</a>
											</div>
										</div>
									<!-- Order Container End -->
								</div>
							</div>
						</div>
                    </form>
					<!-- Form End -->
				</div>
			</div>
			<!-- Order End -->
		</main>
		<!-- Main End -->

		<!-- Footer -->
		<footer class="main-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h5 class="footer-heading">Navigasi</h5>
						<ul class="list-unstyled nav-links">
							<li><a href="../index.php" class="footer-link">Beranda</a></li>
							<li><a href="../kategori/kategori.php" class="footer-link">Kategori</a></li>
							<li><a href="../barang/barang.php" class="footer-link">Barang</a></li>
							<li><a href="order.php" class="footer-link">Order</a></li>
						</ul>
					</div>
					<div class="col-md-90">
						<h5 class="footer-heading">Kontak</h5>
						<ul class="list-unstyled contact-links">
							<li><i class="icon icon-map-marker"></i><a href="https://goo.gl/maps/aMUNnmKNBACjYymA7" class="footer-link" target="_blank">Bandung, Jawa Barat, Indonesia</a></li>
							<li><i class="icon icon-envelope3"></i><a href="https://mail.google.com/" class="footer-link">Email: riyandi.firman08@gmail.com</a></li>
							<li><i class="icon icon-phone2"></i><a href="#" class="footer-link">Phone: +123123123123</a></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8">
						<ul id="subFooterLinks">
							<li><a href="https://github.com/riyandifirman" target="_blank">Made With <i class="fa fa-heart pulse"></i> by riyandifirman</a></li>
							<li>Pemrograman Web</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div id="copy">?? 2022 Zalarie</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer End -->

	</div>
	<!-- Page End -->

	<!-- Back to top button -->
	<div id="toTop"><i class="fa fa-chevron-up"></i></div>

	<!-- Vendor Javascript Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="../../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/vendor/easing/js/easing.min.js"></script>
	<script src="../../assets/vendor/parsley/js/parsley.min.js"></script>
	<script src="../../assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="../../assets/vendor/price-format/js/jquery.priceformat.min.js"></script>
	<script src="../../assets/vendor/theia-sticky-sidebar/js/ResizeSensor.min.js"></script>
	<script src="../../assets/vendor/theia-sticky-sidebar/js/theia-sticky-sidebar.min.js"></script>
	<script src="../../assets/vendor/mmenu/js/mmenu.min.js"></script>
	<script src="../../assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="../../assets/vendor/float-labels/js/float-labels.min.js"></script>

	<!-- Main Javascript File -->
	<script src="../../assets/js/scripts.js"></script>
	<script src="../../assets/js/calculate.js"></script>
    <script>
        $(document).ready(function(){

            $(document).on('click', '.remove-btn', function(){
                $(this).closest('.main-form').remove();
            });

            $(document).on('click', '.add-more-form', function () {
                $('.paste-new-forms').append('<div class="main-form border-bottom">\
                                                        <div class="row">\
                                                            <div class="col-lg-12">\
                                                                <select class="wide" name="id_barang[]" id="id_barang" required>\
                                                                    <option value="">Pilih Barang</option>\
                                                                    <?php
                                                                        include '../koneksi.php';
                                                                        $query = "SELECT * FROM barang";
                                                                        $result = mysqli_query($koneksi, $query);
                                                                        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)):;
                                                                    ?>
                                                                    <option value="<?php echo $row['kode_barang'];?>"><?php echo $row['nama'];?></option>\
                                                                    <?php
                                                                        endwhile;
                                                                    ?>
                                                                </select>\
                                                            </div>\
                                                            <div class="col-lg-12 mt-2">\
                                                                <div class="form-group">\
                                                                    <label for="quantity">Kuantitas Barang</label>\
                                                                    <input id="quantity" class="form-control" name="quantity[]" type="text" required maxlength="50"/>\
                                                                </div>\
                                                            </div>\
                                                            <div class="col-lg-12 text-right">\
                                                                <div class="form-group">\
                                                                    <button type="button" class="remove-btn btn btn-danger btn-sm">Hapus Barang</button>\
                                                                </div>\
                                                            </div>\
                                                        </div>\
                                                    </div>');
            });
        });
    </script>

</body>

</html>