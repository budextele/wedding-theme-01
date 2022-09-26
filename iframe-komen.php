<!DOCTYPE html>

<head>
<link rel="stylesheet" href="wp-content/plugins/weddingpress/assets/css/wdp.css">
<link rel="stylesheet" href="wp-content/themes/hello-elementor/style.min.css">
    <link rel="stylesheet" href="wp-content/plugins/elementor/assets/css/frontend.min.css">
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/post-18.css">
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/post-139055.css">
    <link rel="stylesheet" href="wp-includes/css/dist/block-library/style.min.css">
    <link rel="stylesheet" href="wp-content/plugins/bdthemes-element-pack/assets/css/bdt-uikit.css">
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/global.css">
</head>
<body>
    


<?php
																				include 'koneksi.php';
																				$data = mysqli_query($koneksi,"select * from ucapan");
																				while($d = mysqli_fetch_array($data)){
																					?>
																					<div class="user-guestbook">
																						<div></div>
																						<div class="guestbook">
																							<a class="guestbook-name">
																								<?php echo $d['nama']; ?>
																							</a>
																							<span class="wdp-confirm">
																								<i class="fas fa-check-circle"></i>
																								<?php echo $d['konfirmasi']; ?>
																							</span>
																							<div class="guestbook-message">
																								<?php echo $d['komen']; ?>
																							</div>
																						</div>
																					</div>
																			<?php
																				}
																			?>

</body>
</html>