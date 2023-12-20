<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Apps TVIP ICT INFRA">
	<meta name="author" content="Apps">
  	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/cctv.png">
  	<link rel="icon" type="image/png" href="<?=base_url()?>assets/img/tvip.png">

	<title>IP TVIP | Network Devices</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
	<link href="<?=base_url()?>assets/css/fonts.googleapis.com_css2_family=Poppins_wght@300;400;500&display=swap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet">	
  	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"> </script>
	
  	<script>
	  	$(document).ready(function () {
		    $('#dataTable').DataTable();
		}); 
	</script>
	<!-- Choose your prefered color scheme -->
	<!-- <link href="css/light.css" rel="stylesheet"> -->
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="<?=base_url()?>assets/css/light.css" rel="stylesheet">
	<!--<script src="<?=base_url()?>assets/js/settings.js"></script>-->
	<!-- END SETTINGS -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>-->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script>
<style>
	.LoginScreen {
         background-color    : #777 !important;
         background-image    : url('https://source.unsplash.com/random/featured/?server') !important;
         background-position : center;
         background-repeat   : no-repeat;
         background-size     : cover;
     }
	 .card {
		box-shadow: 0 0 3rem 0 rgba(41,48,66,1);
		margin-bottom: 24px;
	}
</style>
</head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky" class="LoginScreen">
	<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							

							<div class="card">
								<div class="card-header py-0">
									<div class="text-center mt-4">
										<img class="mb-4" width="50px" height="50px" src="<?=base_url()?>assets/img/tvip.png"/>
										<br>
										<h1 class="h2">IP TVIP - Network Devices</h1>
									</div>
								</div>
								<div class="card-body">
									<div class="m-sm-3">
										<form class="form-horizontal" method="post" action="<?php echo base_url()?>login/dologin">
											<div class="mb-3">
												<label class="form-label">Username</label>
												<input class="form-control form-control-lg" type="text" name="username" placeholder="Enter your Username" required />
											</div>
											<div class="mb-3">
												<label class="form-label">Password</label>
												<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" required />
											</div>
											<div class="d-grid gap-2 mt-3">
												<button type="submit" class="btn btn-lg btn-primary">Sign in</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="<?=base_url()?>assets/js/app.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
<?php if ($this->session->flashdata('failed')) { ?>
	<script>
		const notyf = new Notyf();
		notyf.open({
			type: 'error',
			duration: 3000,
			ripple: true,
			dismissible:true,
			position: {
			    x: 'center',
			    y: 'top',
			},
			icon:{className:"notyf__icon--error",tagName:"i"},
			message: "<?=$this->session->flashdata('failed')?>"
		});
   </script>
 <?php } ?>
</body>

</html>