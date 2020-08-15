<?php
  // Initialiser la session
  session_start();
  /* Vérifiez si l'utilisateur est connecté, sinon redirigez-le 
  vers la page de connexion*/
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CHECK.Vision | Monitoring</title>
	<!-- core:css -->
	<link rel="stylesheet" href="/CHECKVision/assets/vendors/core/core.css">
	<!-- endinject -->
  <!-- plugin css for this page -->
	<link rel="stylesheet" href="/CHECKVision/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
	<!-- end plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="/CHECKVision/assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="/CHECKVision/assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->
  <!-- Layout styles -->  
	<link rel="stylesheet" href="/CHECKVision/assets/css/demo_2/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="/CHECKVision/assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          CHECK.<span>Vision</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <i class="link-icon" data-feather="activity"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Monitoring</li>
          <li class="nav-item">
              <li class="nav-item">
              <a href="pages/apps/alarmes.html" class="nav-link">
              <i class="link-icon" data-feather="bell"></i>
              <span class="link-title">Alarmes</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/videosurveillance.html" class="nav-link">
              <i class="link-icon" data-feather="video"></i>
              <span class="link-title">Vidéosurveillances</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/servers.html" class="nav-link">
              <i class="link-icon" data-feather="server"></i>
              <span class="link-title">Serveurs</span>
            </a>
          </li>
          <li class="nav-item nav-category">Gestion des clients</li>
          <li class="nav-item">
              <li class="nav-item">
                <a href="clients.html" class="nav-link">
                  <i class="link-icon" data-feather="users"></i>
                  <span class="link-title">Clients</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/apps/clients.html" class="nav-link">
                  <i class="link-icon" data-feather="radio"></i>
                  <span class="link-title">Transmetteurs</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/apps/clients.html" class="nav-link">
                  <i class="link-icon" data-feather="cloud"></i>
                  <span class="link-title">Adresses IP</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/apps/authentifications.html" class="nav-link">
                  <i class="link-icon" data-feather="unlock"></i>
                  <span class="link-title">Authentifications</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/apps/appels.html" class="nav-link">
                  <i class="link-icon" data-feather="phone-call"></i>
                  <span class="link-title">Appels de routine</span>
                </a>
              </li>
              <li class="nav-item nav-category">Gestion des appareils</li>
          <li class="nav-item">
              <li class="nav-item">
                <a href="pages/apps/clients.html" class="nav-link">
                  <i class="link-icon" data-feather="hard-drive"></i>
                  <span class="link-title">Appareils</span>
                </a>
              </li>

          <li class="nav-item">
                <a href="pages/apps/activation.html" class="nav-link">
                  <i class="link-icon" data-feather="plus"></i>
                  <span class="link-title">Activations</span>
                </a>
          </li>
          <li class="nav-item">
                <a href="pages/apps/protections.html" class="nav-link">
                  <i class="link-icon" data-feather="shield"></i>
                  <span class="link-title">Protections</span>
                </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/parametre.html" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">Paramètres</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
							<div class="input-group-prepend">
								<div class="input-group-text">
									<i data-feather="search"></i>
								</div>
							</div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Rechercher...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-fr mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1">French</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ml-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ml-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ml-1"> Spanish </span></a>
							</div>
            </li>
						<li class="nav-item dropdown nav-apps">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="appsDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">Web Apps</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
								<div class="dropdown-body">
									<div class="d-flex align-items-center apps">
										<a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
										<a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
										<a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
										<a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
									</div>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-messages">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="messageDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Leonardo Payne</p>
												<p class="sub-text text-muted">2 min ago</p>
											</div>	
											<p class="sub-text text-muted">Project status</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Carl Henson</p>
												<p class="sub-text text-muted">30 min ago</p>
											</div>	
											<p class="sub-text text-muted">Client meeting</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Jensen Combs</p>												
												<p class="sub-text text-muted">1 hrs ago</p>
											</div>	
											<p class="sub-text text-muted">Project updates</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Amiah Burton</p>
												<p class="sub-text text-muted">2 hrs ago</p>
											</div>
											<p class="sub-text text-muted">Project deadline</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Yaretzi Mayo</p>
												<p class="sub-text text-muted">5 hr ago</p>
											</div>
											<p class="sub-text text-muted">New record</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-notifications">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu" aria-labelledby="notificationDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">Notifications</p>
									<a href="javascript:;" class="text-muted">Éffacer tout</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="bell"></i>
										</div>
										<div class="content">
											<p>Alarme éffraction: Activée</p>
											<p class="sub-text text-muted">Objet n°12455</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="bell"></i>
										</div>
										<div class="content">
											<p>Alarme éffraction: Activée</p>
											<p class="sub-text text-muted">Objet n°7452</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="cloud-off"></i>
										</div>
										<div class="content">
											<p>Connexion perdue</p>
											<p class="sub-text text-muted">Objet n°9873</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="video-off"></i>
										</div>
										<div class="content">
											<p>Signal vidéo IP</p>
											<p class="sub-text text-muted">Objet n°642</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="icon">
											<i data-feather="plus"></i>
										</div>
										<div class="content">
											<p>Activation confirmée</p>
											<p class="sub-text text-muted">Objet n°4789</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Philippe PEREIRA</p>
										<p class="email text-muted mb-3">contact@guardvision.ch</p>
										<p class="email text-muted mb-3">Administrateur</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Editer le profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Changer d'utilisateur</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Se déconnecter</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->
			
			<div class="page-content">
			
				<div class="">
					<div class="card">
					  <div class="card-body">
						<div class="d-flex justify-content-between align-items-baseline mb-2">
						  <h6 class="card-title mb-0">CLients</h6>
						  <div class="dropdown mb-2">
							<button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
							</button>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
							  <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm mr-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>
							  <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm mr-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
							  <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm mr-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
							  <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm mr-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
							  <a class="dropdown-item d-flex align-items-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
							</div>
						  </div>
						</div>
						<div class="table-responsive">
						  <table class="table table-hover mb-0">
							<thead>
							  <tr>
								<th class="pt-0">N° Client</th>
								<th class="pt-0">Nom</th>
								<th class="pt-0">Prénom</th>
								<th class="pt-0">Adresse</th>
								<th class="pt-0">N° téléphone</th>
								<th class="pt-0">Type</th>
								<th class="pt-0">Transmetteur</th>
								<th class="pt-0">Action</th>
							  </tr>
							</thead>
							<tbody>
							  <tr>
								<td>1</td>
								<td>NobleUI jQuery</td>
								<td>01/01/2020</td>
								<td>26/04/2020</td>
								<td><span class="badge badge-danger">Released</span></td>
								<td>Leonardo Payne</td>
							  </tr>
							  <tr>
								<td>2</td>
								<td>NobleUI Angular</td>
								<td>01/01/2020</td>
								<td>26/04/2020</td>
								<td><span class="badge badge-success">Review</span></td>
								<td>Carl Henson</td>
							  </tr>
							  <tr>
								<td>3</td>
								<td>NobleUI ReactJs</td>
								<td>01/05/2020</td>
								<td>10/09/2020</td>
								<td><span class="badge badge-info-muted">Pending</span></td>
								<td>Jensen Combs</td>
							  </tr>
							  <tr>
								<td>4</td>
								<td>NobleUI VueJs</td>
								<td>01/01/2020</td>
								<td>31/11/2020</td>
								<td><span class="badge badge-warning">Work in Progress</span>
								</td>
								<td>Amiah Burton</td>
							  </tr>
							  <tr>
								<td>5</td>
								<td>NobleUI Laravel</td>
								<td>01/01/2020</td>
								<td>31/12/2020</td>
								<td><span class="badge badge-danger-muted text-white">Coming soon</span></td>
								<td>Yaretzi Mayo</td>
							  </tr>
							  <tr>
								<td>6</td>
								<td>NobleUI NodeJs</td>
								<td>01/01/2020</td>
								<td>31/12/2020</td>
								<td><span class="badge badge-primary">Coming soon</span></td>
								<td>Carl Henson</td>
							  </tr>
							  <tr>
								<td class="border-bottom">3</td>
								<td class="border-bottom">NobleUI EmberJs</td>
								<td class="border-bottom">01/05/2020</td>
								<td class="border-bottom">10/11/2020</td>
								<td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>
								<td class="border-bottom">Jensen Combs</td>
							  </tr>
							</tbody>
						  </table>
						</div>
					  </div> 
					</div>
				  </div>



			
			</div>
			

			

			<!-- partial:partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
				<p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://guardvision.ch/" target="_blank">GuardVision</a>. Tous droits réservés.</p>
				<p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
		
		</div>
	</div>

	<!-- core:js -->
	<script src="/CHECKVision/assets/vendors/core/core.js"></script>
	<!-- endinject -->
  <!-- plugin js for this page -->
  <script src="/CHECKVision/assets/vendors/chartjs/Chart.min.js"></script>
  <script src="/CHECKVision/assets/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="/CHECKVision/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="/CHECKVision/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="/CHECKVision/assets/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="/CHECKVision/assets/vendors/progressbar.js/progressbar.min.js"></script>
	<!-- end plugin js for this page -->
	<!-- inject:js -->
	<script src="/CHECKVision/assets/vendors/feather-icons/feather.min.js"></script>
	<script src="/CHECKVision/assets/js/template.js"></script>
	<!-- endinject -->
  <!-- custom js for this page -->
  <script src="/CHECKVision/assets/js/dashboard.js"></script>
  <script src="/CHECKVision/assets/js/datepicker.js"></script>
	<!-- end custom js for this page -->
</body>
</html>    