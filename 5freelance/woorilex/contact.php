<?php include('header.php'); ?>

<style>
	.consen_nav_manu {
	    background: #10102E !important;
	}
</style>

<!--==================================================-->
<!-- Start Breadcumb Area -->
<!--===================================================-->
<div class="breadcumb-area d-flex align-items-center">
	<div class="container">
		<div class="row d-flex align-items-center">
			<div class="col-lg-12">
				<div class="breadcumb-content">
					<h1>문의하기</h1>
					<ul>
						<li><a href="index.php">홈</a></li>
						<li>문의하기</li>
					</ul>
				</div>
			</div>

			<div class="britcam-shape">
				<div class="breadcumb-content upp">
					<ul>
						<li><a href="index.php">홈</a></li>
						<li>문의하기</li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div>

<!--==================================================-->
<!-- Start Contact Section -->
<!--===================================================-->
<div class="contact-us pt-90 pb-90">
	<div class="container">
		<div class="row">

			<!-- Contact Form -->
			<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">

				<div class="contact_from_box">

					<div class="contact_title pb-4">
						<h3>상담 문의</h3>
						<p>궁금하신 사항은 언제든지 문의해 주세요.</p>
					</div>

					<form action="#" method="POST" id="dreamit-form">

						<div class="row">

							<div class="col-lg-6">
								<div class="form_box mb-30">
									<input type="text" name="name" placeholder="성함">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form_box mb-30">
									<input type="email" name="email" placeholder="이메일">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form_box mb-30">
									<input type="text" name="phone" placeholder="연락처">
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form_box mb-30">
									<input type="text" name="company" placeholder="회사명">
								</div>
							</div>

							<div class="col-lg-12">
								<div class="form_box mb-30">
									<textarea name="message" cols="30" rows="10"
										placeholder="문의 내용을 입력해 주세요"></textarea>
								</div>

								<div class="quote_button">
									<button class="btn" type="submit">
										<i class="bi bi-gear"></i>
										문의 보내기
									</button>
								</div>
							</div>

						</div>

					</form>

					<div id="status"></div>

				</div>

			</div>

			<!-- Contact Information -->
			<div class="col-sm-12 col-md-6 col-lg-6 pl-0 pr-0">

				<div class="cda-content-area">

					<div class="cda-single-content d-flex">
						<div class="cda-icon">
							<i class="fas fa-building"></i>
						</div>
						<div class="cda-content-inner">
							<h4>사무소</h4>
							<p>
								DELHI / NOIDA / GURUGRAM <br>
								CHENNAI / SRICITY / BANGALURU
							</p>
						</div>
					</div>

					<div class="cda-single-content hr d-flex">
						<div class="cda-icon">
							<i class="fas fa-map-marker-alt"></i>
						</div>
						<div class="cda-content-inner">
							<h4>본사 주소</h4>
							<p>
								BB-111, ANSAL GOLF LINK-1<br>
								GREATER NOIDA, G.B.NAGAR,<br>
								UP-201310
							</p>
						</div>
					</div>

					<div class="cda-single-content hr d-flex">
						<div class="cda-icon">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="cda-content-inner">
							<h4>M.K. RANA</h4>
							<p>
								9971557761<br>
								9717001007
							</p>
						</div>
					</div>

					<div class="cda-single-content hr d-flex">
						<div class="cda-icon">
							<i class="fas fa-comments"></i>
						</div>
						<div class="cda-content-inner">
							<h4>KAKAO ID</h4>
							<p>WOORILEX777</p>
						</div>
					</div>

					<div class="cda-single-content hr d-flex">
						<div class="cda-icon">
							<i class="fas fa-phone-alt"></i>
						</div>
						<div class="cda-content-inner">
							<h4>Y.H. PARK</h4>
							<p>8800294092</p>
						</div>
					</div>

					<div class="cda-single-content hr d-flex">
						<div class="cda-icon">
							<i class="fas fa-comments"></i>
						</div>
						<div class="cda-content-inner">
							<h4>KAKAO ID</h4>
							<p>LYAKA</p>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>

<?php include('footer.php'); ?>