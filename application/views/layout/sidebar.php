<nav id="sidebar" class="sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="<?=base_url()?>">
			<img src="<?=base_url()?>assets/img/tvip.png" width="30px" height="30px" />
			<span class="align-middle me-3">&nbsp;IP TVIP</span>
        </a>
		<ul class="sidebar-nav">
			<li class="sidebar-header">Pages</li>
			<li class="sidebar-item <?=($this->uri->segment(1)=== NULL)?'active':''?>"> <!--active-->
				<a class="sidebar-link" href="<?=base_url()?>">
              		<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboards</span>
              		<!--<span class="badge badge-sidebar-primary">5</span> -->
            	</a>
				<!--<ul id="dashboards" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">show
					<li class="sidebar-item "><a class="sidebar-link" href="dashboard-default.html">Default</a></li> active
					<li class="sidebar-item"><a class="sidebar-link" href="dashboard-analytics.html">Analytics</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="dashboard-saas.html">SaaS</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="dashboard-social.html">Social</a></li>
					<li class="sidebar-item"><a class="sidebar-link" href="dashboard-crypto.html">Crypto</a></li>
				</ul>-->
			</li>
			<li class="sidebar-item <?=($this->uri->segment(1)=== 'listdepo')?'active':''?>">
				<a class="sidebar-link" href="<?=base_url('listdepo')?>">
              		<i class="align-middle" data-feather="list"></i><span class="align-middle">List Depo</span>
            		</a>
			</li>
			<li class="sidebar-item <?=($this->uri->segment(1)=== 'input')?'active':''?>">
				<a class="sidebar-link" href="<?=base_url('input')?>">
              		<i class="align-middle" data-feather="edit"></i><span class="align-middle">Input Device</span>
            		</a>
			</li>


					
		</ul>
	</div>
</nav>