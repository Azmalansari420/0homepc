<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="col-lg-4 col-md-12">
					
					<div class="widget-categories-box">
						<!-- categories title -->
						<div class="categories-title">
							<h4> Our Service </h4>
						</div>
						<!-- widget categories menu -->
						<div class="widget-categories-menu">

								<ul>
								    <li class="<?= ($current_page == 'incorporation.php') ? 'active' : ''; ?>">
								        <a href="incorporation.php">법인 설립 서비스</a>
								    </li>

								    <li class="<?= ($current_page == 'accounting-tax.php') ? 'active' : ''; ?>">
								        <a href="accounting-tax.php">회계 및 세무 관리</a>
								    </li>

								    <li class="<?= ($current_page == 'license-service.php') ? 'active' : ''; ?>">
								        <a href="license-service.php">라인선스 / 인허가 / 인증 서비스</a>
								    </li>

								    <li class="<?= ($current_page == 'transfer-pricing.php') ? 'active' : ''; ?>">
								        <a href="transfer-pricing.php">이전가격(Transfer Pricing)</a>
								    </li>

								    <li class="<?= ($current_page == 'audit-financial.php') ? 'active' : ''; ?>">
								        <a href="audit-financial.php">회계 감사 및 재무제표 서비스</a>
								    </li>

								    <li class="<?= ($current_page == 'legal-advisory.php') ? 'active' : ''; ?>">
								        <a href="legal-advisory.php">법률 자문 및 계약서 서비스</a>
								    </li>

								    <li class="<?= ($current_page == 'company-closure.php') ? 'active' : ''; ?>">
								        <a href="company-closure.php">법인 폐업 및 청산 서비스</a>
								    </li>

								    <li class="<?= ($current_page == 'contract-drafting.php') ? 'active' : ''; ?>">
								        <a href="contract-drafting.php">계약서 작성</a>
								    </li>

								    <li class="<?= ($current_page == 'real-estate.php') ? 'active' : ''; ?>">
								        <a href="real-estate.php">부동산 컨설팅</a>
								    </li>

								    <li class="<?= ($current_page == 'litigation-support.php') ? 'active' : ''; ?>">
								        <a href="litigation-support.php">소송 지원 서비스</a>
								    </li>
								</ul>
						</div>
					</div>
					<!-- categoreis thumb -->
					<div class="widget-categories-thumb">
						<!-- widget categories content  -->
						<div class="widget-categories-content text-center">
							<div class="logo-thumb">
								<a href="index.php"> <img src="assets/logo.png" alt="" class="img-fluid" width="100px"> </a>
							</div>
							<div class="widget-title2">
								<h3>Need Service?</h3>
							</div>
							<div class="widget-button">
								<a href="contact.php"> <i class="bi bi-envelope"></i> Contact Us </a>
							</div>
						</div>
					</div>
				</div>