<!DOCTYPE html>


<html
	lang="{{ str_replace('_','-',app()->getLocale()) }}"
  	class="light-style layout-menu-fixed layout-compact"
  	dir="ltr"
  	data-theme="theme-default"
  	data-assets-path="./assets/"
  	data-template="horizontal-menu-template">

	<head>
		@include('layouts.head')
	</head>
	<body>
		@auth
		<!-- Layout wrapper -->
		<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
      		<div class="layout-container">
				@include('layouts.main-header')
				
				<!-- Layout container -->
				<div class="layout-page">
					<!-- Content wrapper -->
					<div class="content-wrapper">
						@include('layouts.main-sidebar')
			
			
			
						@endauth
						@yield('content')
						<!-- viewtasks -->
						<div class="modal fade " id="viewtasks" aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-md  modal-dialog-centered">
								<div class="modal-content p-3 p-md-3">
									<div class="modal-header">
										<h1 class="modal-title fs-4 fw-bold text-tilte-b"> جميع معلومات المهمة بالنسبة للموظف : هدير</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<ul class="p-0 m-0 ul-task">
											<li class="mb-2 pb-1 light-style-none">
												<div class="d-flex  align-items-center">
													<div class="badge bg-label-success rounded p-2"><i class="ti ti-users ti-sm"></i></div>
													<h6 class="mb-0 ms-3">الموظف الموكل اليه</h6>
												</div>
												<div class="d-text p-2 mt-2">
													<p class="mb-0 fw-medium">هدير</p>
												</div>
											</li>
											<li class="mb-2 pb-1">
												<div class="d-flex  align-items-center">
													<div class="badge bg-label-info rounded p-2"><i class="ti ti-link ti-sm"></i></div>
													<h6 class="mb-0 ms-3">الشركة</h6>
												</div>
												<div class="d-text p-2 mt-2">
													<p class="mb-0 fw-medium">رايتو</p>
												</div>
											</li>
											<li class="mb-2 pb-1 ">
												<div class="d-flex align-items-center">
													<div class="badge bg-label-warning rounded p-2">
														<i class="ti ti-click ti-sm"></i>
													</div>
													<h6 class="mb-0 ms-3">نوع المهمة</h6>
												</div>
												<div class="p-2 mt-2 d-text">
													<p class="mb-0 fw-medium">مهمة عادية</p>	
												</div>
											</li>
											<li class="mb-2 pb-1 ">
												<div class="d-flex align-items-center">
													<div class="badge bg-label-primary rounded p-2">
														<i class="fas fa-comment-alt  fs-4"></i>
													</div>
													<h6 class="mb-0 ms-3">الوصف</h6>
												</div>
												<div class="p-2 mt-2 d-text">
													<p class="mb-0 fw-medium">
														اعادة تصميم المحطات
													</p>
												</div>
											</li>
											<li class="mb-2 pb-1 ">
												<div class="d-flex align-items-center">
													<div class="badge bg-label-secondary rounded p-2">
														<i class="ti ti-alert-triangle ti-sm text-body"></i>
													</div>
													<h6 class="mb-0 ms-3">حالة المهمة</h6>
												</div>
												<div class="p-2 mt-2 d-text">
													<p class="mb-0 fw-medium">جديد</p>
												</div>
											</li>
											<li class="mb-2 pb-1 ">
												<div class="d-flex align-items-center">
													<div class="badge bg-label-danger rounded p-2">
														<i class="ti ti-calendar ti-sm"></i>
													</div>
													<h6 class="mb-0 ms-3">من</h6>
												</div>
												<div class="p-2 mt-2 d-text">
													<p class="mb-0 fw-medium">2024-02-22 15:32:32</p>
												</div>	
											</li>
											<li class="mb-2 pb-1 ">
												<div class="d-flex align-items-center w-100 flex-wrap">
													<div class="badge bg-label-danger rounded p-2">
														<i class="ti ti-calendar ti-sm"></i>
													</div>
													<h6 class="mb-0 ms-3">الى</h6>
												</div>
												<div class="p-2 mt-2 d-text">
													<p class="mb-0 fw-medium">2024-02-22 15:32:32</p>
												</div>
											</li>
											<li class="mb-2 pb-1">
												<div class="d-flex align-items-center w-100 flex-wrap">
													<div class="badge bg-label-warning rounded p-2">
														<i class="ti ti-clock ti-sm"></i>
													</div>
													<h6 class="mb-0 ms-3"> 
														المدة
													</h6>
												</div>
												<div class="p-2 mt-2 d-text">
													<p class="mb-0 fw-medium">
														00.00 
													</p>
												</div>
											</li>
											<li class="mb-2 pb-1 ">
												<div class="d-flex align-items-center w-100 flex-wrap">
													<div class="badge bg-label-primary rounded p-2">
														<i class="fas fa-comment-alt  fs-4"></i>
													</div>
													<h6 class="mb-0 ms-3">ملاحظة علي المهمة</h6>
													</div>
														<div class="p-2 mt-2 d-text">
															<p class="mb-0 fw-medium">  
																...............................
															</p>
														</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- edit Hardware Modal -->	
						<!--المهام الشخصيه-->
						@include('layouts.footer')
						<div class="content-backdrop fade"></div>
					</div>
				<!--/ Content wrapper -->
				</div>
				<!--/ Layout container -->
			</div>
		</div>
		<!--color-->
		<div class="compoent-color position-fixed">
			<div class="back">
				<div class="dropdown">
					<button class="btn  btn-btn d-flex mx-0 justify-content-between dropbtn" type="button" onclick="myFunction()" id="myDIV">
						<span class="span-i">
							<img src="{{ asset('assets/img/icons/color-wheel.png') }}" alt="platte">
						</span>
					</button>
				</div>
				<div  id="myDropdown" class="dropdown-content dropdown-menu">
					<div class="d-flex align-items-center flex-wrap">
						<div id="theme-picker-section" class="example-section"@change="updateTheme">      
							<input type="radio" name="theme" value="blue" checked="true">
							<input type="radio" name="theme" value="grey">
							<input type="radio" name="theme" value="green">
							<input type="radio" name="theme" value="Brown">
							<input type="radio" name="theme" value="orange">
							<input type="radio" name="theme" value="red">
						</div>
					</div>
				</div>
			</div>
		</div>
    	<!-- Overlay -->
    	<div class="layout-overlay layout-menu-toggle"></div>
    	<!-- Drag Target Area To SlideIn Menu On Small Screens -->
    	<div class="drag-target"></div>
    	<!--/ Layout wrapper -->
		@include('layouts.footer-scripts')
  </body>
</html>