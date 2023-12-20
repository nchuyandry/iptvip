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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="<?=base_url()?>assets/css/fonts.googleapis.com_css2_family=Poppins_wght@300;400;500&display=swap.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v6.4.0/css/all.css" rel="stylesheet">	
  	<!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"> </script>-->
  	  <link href="<?=base_url()?>assets/css/dataTables.bootstrap4.css" rel="stylesheet" /><!--
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />-->
	<link href="<?=base_url()?>assets/css/sweetalert.css" rel="stylesheet">		
	<script type="text/javascript" src="<?=base_url() ?>assets/js/plugins/sweetalert.min.js"> </script> 	
	<script src="<?=base_url()?>assets/js/script.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
  	<script>
	  	$(document).ready(function () {
		    $('#dataTable').DataTable();
		}); 
	</script>
	<link class="js-stylesheet" href="<?=base_url()?>assets/css/light.css" rel="stylesheet">

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
	<!--<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-Q3ZYEKLQ68');
	</script>-->
	<style>
		.dataTables_length label, .dataTables_filter label  {
	  		display: inline-flex;
	  		margin-bottom: 0.5rem;
	  		vertical-align: middle;
	  		line-height: 2;
	  		margin-left: 1rem;
	  		margin-right: 1rem;
	  	}
	  	.dataTables_length .form-control{
			vertical-align: middle;
		}
	  	.dataTables_filter {
	  		text-align: right;	
	  	}
	  	div.dataTables_wrapper div.dataTables_info{
			margin-left: 1rem;
	  		margin-right: 1rem;
	  		padding-top: 0.85em;
	    	padding-bottom: 0.85em;
		}
		div.dataTables_wrapper div.dataTables_paginate {
		    margin: 0;
		    text-align: right;
		    white-space: nowrap;
		    margin-left: 1rem;
	  		margin-right: 1rem;
		}
		.rounded {
		    border-radius: var(--bs-border-radius) !important;
		}
		.scroll-to-top {
		  position: fixed;
		  right: 15px;
		  bottom: 15px;
		  display: none;
		  width: 50px;
		  height: 50px;
		  text-align: center;
		  color: #fff;
		  background: rgba(41, 48, 66, 0.5);
		  line-height: 50px;
		}
		.scroll-to-top:focus, .scroll-to-top:hover {
		  color: #fff;
		}
		.scroll-to-top:hover {
		  background: #293042;
		}
		.scroll-to-top i {
		  font-weight: 800;
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

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky" id="page-top">
	<div class="wrapper">
		<?php $this->load->view('layout/sidebar')?>
		<div class="main">
			<?php $this->load->view('layout/navbar')?>

			<main class="content">
				<?php echo $contents?>
			</main>

			<?php $this->load->view('layout/footer')?>
		</div>
	</div>
	<script src="<?=base_url()?>assets/js/plugins/bootstrap-notify.js"></script>
	<script src="<?=base_url()?>assets/js/app.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
	
<?php if ($this->session->flashdata('welcome')) { ?>
	<script>
		const notyf = new Notyf();
		notyf.open({
			type: 'success',
			duration: 3000,
			position: {
			    x: 'right',
			    y: 'top',
			},
			ripple: true,
			dismissible:true,
			icon: {
				className:"notyf__icon--success",
				tagName:"i"
			},
			message: '<?=$this->session->flashdata('welcome')?>'
		});
   </script>
<?php }elseif ($this->session->flashdata('saved')) {?>
	<script>
		const notyf = new Notyf();
		notyf.open({
			type: 'success',
			duration: 3000,
			position: {
			    x: 'right',
			    y: 'top',
			},
			ripple: true,
			dismissible:true,
			icon: {
				className:"notyf__icon--success",
				tagName:"i"
			},
			message: '<?=$this->session->flashdata('saved')?>'
		});
   </script>
<?php }elseif ($this->session->flashdata('error')) {?>
<script>
		const notyf = new Notyf();
		notyf.open({
			type: 'error',
			duration: 3000,
			position: {
			    x: 'right',
			    y: 'top',
			},
			ripple: true,
			dismissible:true,
			icon:{className:"notyf__icon--error",tagName:"i"},
			message: '<?=$this->session->flashdata('error')?>'
		});
</script>
<?php }?>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Datatables Responsive
			$("#dataTable").DataTable({
				responsive: true,
				fixedHeader: true
			});
		});
	</script>
<script>
$(document).on('change','#jenis', function(){
		var value = $(this).val();
		if(value == "Access Point"){			
			document.getElementById('wific').style.display = 'block';
		}else{
			document.getElementById('wific').style.display = 'none';
		}

});
$(document).on('click','#remove',function(){
    id = $(this).attr('data');
    swal({
		title: "Are you sure?",
		text: "Data will be Removed",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Yes, Remove!",
		closeOnConfirm: false
	},
	function(isConfirm){
		if (isConfirm) {
			$.ajax({
			    url: '<?php echo base_url()?>home/remove',
			    type: 'POST',
			    dataType: 'json',
			    data: {id: id}, 
			})
		    .done(function(data) {
		        if (data) {
					swal("Done", "Document has been Removed!.", "success");
					setTimeout(function(){ location.reload(); }, 1500);
				}
			});
		}
	});       
});
</script>
</body>

</html>