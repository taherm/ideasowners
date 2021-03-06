<header id="header" class="header-no-border-bottom has-nav-bar" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 140, 'stickySetTop': '-140px', 'stickyChangeLogo': true}">
			<div class="header-body">
				
				<div class="header-container container">
					<div class="header-row">
						<div class="header-column justify-content-start">
							<div class="header-row">
								<div class="header-logo">
									<a href="{{url('/')}}">
										<img alt="ideasowners" width="110" height="110" data-sticky-width="82" data-sticky-height="40" data-sticky-top="90" src="{{url('img/services/logo2.jpg')}}">
									</a>
								</div>
							</div>
						</div>
						<div class="header-column justify-content-end">
							<div class="header-row">
								<ul class="header-extra-info d-none d-md-block">
									<li>
										<div class="feature-box feature-box-style-3 align-items-center">
											<div class="feature-box-icon">
												<i class="fa fa-phone"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-0">(+965)94978803</h4>
												<p>
													<small>Get in touch with us</small>
												</p>
											</div>
										</div>
									</li>
									<li>
										<div class="feature-box feature-box-style-3 align-items-center">
											<div class="feature-box-icon">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="feature-box-info">
												<h4 class="mb-0">info@ideasowners.net</h4>
												<p>
													<small>Send us an e-mail</small>
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header-nav-bar header-nav-bar-primary">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav justify-content-start">
										<div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav" >
												<li class="">
														<a class="nav-link" href="/">
														Home
														</a>
													
													</li>
													<li class="">
														<a class="nav-link" href="/about">
														About Us
														</a>
													
													</li>


<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="/portfolio" >
														Portfolio
														</a>
														<ul class="dropdown-menu">
														
															<li>
																<a class="dropdown-item" href="/portfolio/#websites">Websites</a>
															</li>
															<li>
																<a class="dropdown-item" href="/portfolio/#app">Apps</a>
															</li>
															<li>
																<a class="dropdown-item" href="/portfolio/#feasibility">Feasibility Study</a>
															</li>
															<li>
																<a class="dropdown-item" href="/portfolio/#logos">Logos</a>
															</li>
															<li>
																<a class="dropdown-item" href="/portfolio/#video">Videos</a>
															</li>
															<li>
																<a class="dropdown-item" href="/portfolio/#graphic">Graphic Design</a>
															</li>

															

														</ul>
														
													</li>








												@foreach($cat as $item)
			                @if($item->services->count())
													
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" onclick="return false" style="cursor:default" href="/" >
														{{$item->title}}
														</a>
														<ul class="dropdown-menu">
														@foreach($item->services as $submenu)
															<li>
																<a class="dropdown-item" href="{{url($submenu->getTable().'/'.$submenu->id)}}">{{$submenu->title}}</a>
															</li>
															@endforeach
														</ul>
														
													</li>
													
													@else
													<li class="">
														<a class="nav-link" href="/">
														{{$item->title}}
														</a>
													
													</li>
													
													@endif
				@endforeach
				<li class="">
				<a class="nav-link" href="/courses">
													Courses
														</a></li>
				<li class="">
														<a class="nav-link" href="/contact">
													Contact Us
														</a>
													
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
										<i class="fa fa-bars"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
