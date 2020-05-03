		<!--************************************
				Home Slider v2 Start
		*************************************-->
		<div id="hb-homeslider2" class="hb-homeslider v2 owl-carousel owl-theme hb-haslayout">
		@foreach($slider as $slider)
			<div class="item">
				<!-- <div class="container"> -->
					<div class="row">
						<div class="col-xs-12">
							<div class="hb-slidercontent-area">
								<figure class="hb-sliderimg ">
									<img src="{{ asset('frontend/images/slider/'.$slider->gambar) }}" style="width: 100%;height: 500px;object-fit: cover;" alt="image description">
								<!-- <div class="container"> -->
									<figcaption class="hb-slidercontent" style="padding-left: 10%">
											<h3>{{ $slider->judul }}</h3>
											<div class="hb-description">
												<p>{{ $slider->keterangan }}</p>
											</div>
									</figcaption>
								<!-- </div> -->
								</figure>
							</div>
						</div>
					</div>
				<!-- </div> -->
			</div>
		@endforeach
		</div>
		<!--************************************
				Home Slider V2 End
		*************************************-->