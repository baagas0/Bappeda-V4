		<!--************************************
				Header V2 Start
		*************************************-->
		<header id="hb-header" class="hb-header v2 hb-haslayout">   
			<div class="hb-topbar">
				<div class="">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<strong class="hb-logo" style="padding-left:30px;"><a href="index.html"><img src="{{ asset('frontend/images/logo_1.png') }}" alt="company logo here"></a></strong>
							<div class="hb-info-area hidden-xs">
								<ul class="list-unstyled hb-info">
									<li><i class="ti-location-pin hidden-sm"></i><span class="text-center">Jl Pemuda no 148, Kota Semarang<em>Jawa Tengah, Indonesia</em></span></li>
									<li><i class="ti-email hidden-sm"></i><span class="text-center">001-1234-9988<a href="mailto:info.deercreative@gmail.com">bappeda@semarangkota.go.id</a></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hb-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="hb-addnav">
								<div class="hb-searcharea">
									<a href="#" class="search-opener"><i class="icon_search"></i></a>
								</div>
							</div>
							<nav id="hb-nav" class="hb-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#hb-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="hb-navigation" class="collapse navbar-collapse hb-navigation">
									<ul>                                            @foreach($menu as $menu)                     
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">{{ $menu->title}}</a>
											<ul class="list-unstyled sub-menu">

											<?php
			                                    $dropdowns = DB::table('menu')
			                                            ->where('parent_id',$menu->id)
			                                            ->where('jenurl',1)
			                                            ->get();
			                                    foreach ($dropdowns as $dropdown ) { ?>
			                                    <?php $title = strtolower(str_replace(' ','-',$dropdown->title))?>
                                    			<li><a href="{{url('/'.$title)}}">
													{{ $dropdown->title  }}
												</a></li>
			                                    
			                                <?php } ?>  
		
											</ul>
										</li>

									@endforeach
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header V2 End
		*************************************-->