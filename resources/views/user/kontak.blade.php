@extends('layoutUser.app2')

@section('breadcrumbs')
<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="index1.html">Beranda<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="blog-single.html">Kontak Kami</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('content')
	<!-- Start Contact -->
	<section id="contact-us" class="contact-us section">
		<div class="container">
			@include('components.alert')
				<div class="contact-head">
					<div class="row">
						<div class="col-lg-8 col-12">
							<div class="form-main">
								<div class="title">
									<h4>Saran Dan Kritik</h4>
									<h3>Tuliskan Pesan Anda</h3>
								</div>
								<form class="form" method="post" action="{{ route('kontak')}}">
									@csrf
									@method('POST')
									<div class="row">
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Nama Anda<span>*</span></label>
												<input name="name" type="text" placeholder="">
												@if ($errors->has('name'))
													<p class="text-danger">{{ $errors->first('name')}}</p>
												@endif
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Subjek<span>*</span></label>
												<input name="subject" type="text" placeholder="">
												@if ($errors->has('subject'))
													<p class="text-danger">{{ $errors->first('subject')}}</p>
												@endif
											</div>
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>E-mail Anda<span>*</span></label>
												<input name="email" type="email" placeholder="">
												@if ($errors->has('email'))
													<p class="text-danger">{{ $errors->first('email')}}</p>
												@endif
											</div>	
										</div>
										<div class="col-lg-6 col-12">
											<div class="form-group">
												<label>Nomer Handphone<span>*</span></label>
												<input name="hp" type="text" placeholder="">
												@if ($errors->has('hp'))
													<p class="text-danger">{{ $errors->first('hp') }}</p>
												@endif
											</div>	
										</div>
										<div class="col-12">
											<div class="form-group message">
												<label>Pesan Anda<span>*</span></label>
												<textarea name="message" placeholder=""></textarea>
												@if ($errors->has('message'))
													<p class="text-danger">{{ $errors->first('message')}}</p>
												@endif
											</div>
										</div>
										<div class="col-12">
											<div class="form-group button">
												<button type="submit" class="btn ">Kirim</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="single-head">
								<div class="single-info">
									<i class="fa fa-phone"></i>
									<h4 class="title">Hubungi Kami:</h4>
									<ul>
										<li>081263487168</li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-envelope-open"></i>
									<h4 class="title">Email:</h4>
									<ul>
										<li><a href="mailto:info@yourwebsite.com">ud.rizki212@gmail.com</a></li>
									</ul>
								</div>
								<div class="single-info">
									<i class="fa fa-location-arrow"></i>
									<h4 class="title">Alamat Kami:</h4>
									<ul>
										<li>Desa melati II kecamatan perbaungan dusun sei tontong.</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--/ End Contact -->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="map-section">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1991.1513986214445!2d98.97729923055036!3d3.517295636009758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30314532fe2648ed%3A0xbfe900c5a168294e!2sUD.%20Rizki%20Panglong!5e0!3m2!1sid!2sid!4v1638420515238!5m2!1sid!2sid" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>
			</div>
			</div>
	</section>
	
	
@endsection