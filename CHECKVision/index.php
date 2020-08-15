<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
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
              <a href="alarmes.html" class="nav-link">
              <i class="link-icon" data-feather="bell"></i>
              <span class="link-title">Alarmes</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="videosurveillance.html" class="nav-link">
              <i class="link-icon" data-feather="video"></i>
              <span class="link-title">Vidéosurveillances</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="servers.html" class="nav-link">
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
                <a href="transmetteurs.html" class="nav-link">
                  <i class="link-icon" data-feather="radio"></i>
                  <span class="link-title">Transmetteurs</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="ips.html" class="nav-link">
                  <i class="link-icon" data-feather="cloud"></i>
                  <span class="link-title">Adresses IP</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="authentifications.html" class="nav-link">
                  <i class="link-icon" data-feather="unlock"></i>
                  <span class="link-title">Authentifications</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="appels.html" class="nav-link">
                  <i class="link-icon" data-feather="phone-call"></i>
                  <span class="link-title">Appels de routine</span>
                </a>
              </li>
              <li class="nav-item nav-category">Gestion des appareils</li>
          <li class="nav-item">
              <li class="nav-item">
                <a href="appareils.html" class="nav-link">
                  <i class="link-icon" data-feather="hard-drive"></i>
                  <span class="link-title">Appareils</span>
                </a>
              </li>

          <li class="nav-item">
                <a href="activation.html" class="nav-link">
                  <i class="link-icon" data-feather="plus"></i>
                  <span class="link-title">Activations</span>
                </a>
          </li>
          <li class="nav-item">
                <a href="protections.html" class="nav-link">
                  <i class="link-icon" data-feather="shield"></i>
                  <span class="link-title">Protections</span>
                </a>
          </li>
          <li class="nav-item">
            <a href="parametres.html" class="nav-link">
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