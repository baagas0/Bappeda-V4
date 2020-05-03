			<!--************************************
						Our Gallery Start
			*************************************-->
			<section id="hb-gallery" class="hb-gallery hb-sectionspace hb-haslayout">
				<div class="container">
					<div class="row">
						<div class=" col-xs-12 col-sm-12 col-sm-offset-0 col-md-8 col-md-offset-2">
							<div class="hb-sectionhead">
								<div class="hb-sectiontitle">
									<h2 style="color:#D62255;"><span>Sedulur Perencana</span>
										Galeri Perencanaan
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="hb-gallery-area justify-content-md-center">
				@foreach($galeri as $galeri)
					<figure class="hb-galleryimg">
						<img src="https://bappeda.semarangkota.go.id/packages/upload/galeri/{{$galeri->urlpict}}" alt="images description">
						<figcaption class="hb-gallerycontent">
							<ul class="list-unstyled hb-roundicon">
								<li><a href="javascript:void(0)" class="hb-g-icon hover1"><i class="fas fa-arrows-alt"></i></a></li>
								<li><a href="javascript:void(0)" class="hb-g-icon hover2"><i class="fas fa-link"></i></a></li>
							</ul>
							<h3>Di Buat Tanggal</h3>
							<span>{{ $galeri->created_at->format('d M Y') }}</span>
						</figcaption>
					</figure>
				@endforeach
				</div>
			</section>
			<!--************************************
						Our Gallery End
			*************************************-->