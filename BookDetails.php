<!-- START:: INCLUDING THE HEADER -->
<?php include('./layouts/TheHeader.php')?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: HEDAER IMAGE SECTION -->
<div class="header_img_wraper">
  <img src="assets/media/pic4.jpg" alt="Intro Img">

  <!-- START:: SECTION CURVE -->
  <div class="section_svg">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill"></path>
    </svg>
  </div>
  <!-- END:: SECTION CURVE -->
</div>
<!-- END:: HEDAER IMAGE SECTION -->

<!-- START:: BOOK INFO SECTIO -->
<div class="book_info">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-6">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="https://i.ytimg.com/vi/8udmtW-y8Qc/default.jpg">
							<iframe src="https://www.youtube.com/embed/8udmtW-y8Qc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</li>

						<li data-thumb="assets/media/certificate.png">
							<img src="assets/media/certificate.png" />
						</li>
						
						<li data-thumb="assets/media/pic15.jpg">
							<img src="assets/media/pic15.jpg" />
						</li>

						<li data-thumb="assets/media/pic7.jpg">
							<img src="assets/media/pic7.jpg" />
						</li>

					</ul>
				</div>
			</div>

			<div class="col-12 col-md-6">
				<div class="header_wraper">
					<h2> Name Of Book </h2>
				</div>
				<div class="book_text_wraper">
					<div class="tabs_wraper">
						<div class="row">
							<ul class="col-5 nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="pills-pdf-tab" data-toggle="pill" href="#pills-pdf" role="tab" aria-controls="pills-pdf" aria-selected="true">PDF</a>
								</li>

								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-hard-tab" data-toggle="pill" href="#pills-hard" role="tab" aria-controls="pills-hard" aria-selected="false">Hard Copy</a>
								</li>
							</ul>

							<div class="col-7 price">
								<span class="old_price"> 300 EGP </span>
								<span class="new_price"> 200 EGP </span>
							</div>
						</div>
					</div>

					<div class="tab-content mt-3" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-pdf" role="tabpanel" aria-labelledby="pills-pdf-tab">
							(PDF) Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Deserunt rem perspiciatis fugit pariatur suscipit quos fugiat cumque at, 
							maxime nisi obcaecati, fuga quasi voluptatibus architecto inventore 
							sed repellat! Quia, cupiditate.
							Deserunt rem perspiciatis fugit pariatur suscipit quos fugiat cumque at, 
							maxime nisi obcaecati, fuga quasi voluptatibus architecto inventore 
							sed repellat! Quia, cupiditate.
							Deserunt rem perspiciatis fugit pariatur suscipit quos fugiat cumque at, 
							maxime nisi obcaecati, fuga quasi voluptatibus architecto inventore 
							sed repellat! Quia, cupiditate.
						</div>

						<div class="tab-pane fade" id="pills-hard" role="tabpanel" aria-labelledby="pills-hard-tab">
							(Hard Copy) Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Deserunt rem perspiciatis fugit pariatur suscipit quos fugiat cumque at, 
							maxime nisi obcaecati, fuga quasi voluptatibus architecto inventore 
							sed repellat! Quia, cupiditate.
							Deserunt rem perspiciatis fugit pariatur suscipit quos fugiat cumque at, 
							maxime nisi obcaecati, fuga quasi voluptatibus architecto inventore 
							sed repellat! Quia, cupiditate.
							Deserunt rem perspiciatis fugit pariatur suscipit quos fugiat cumque at, 
							maxime nisi obcaecati, fuga quasi voluptatibus architecto inventore 
							sed repellat! Quia, cupiditate.
						</div>
					</div>

					<div class="actions_wraper">
						<div class="row justify-content-between">
							<div class="col-4 d-flex justify-content-start">
								<a href="#"> 
									look <span> Inside </span> 
									<i class="fas fa-search"></i>
								</a>
							</div>
							<div class="col-4 d-flex justify-content-end">
								<button> Add To Cart <i class="fas fa-cart-plus"></i> </button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- START:: BOOK INFO SECTIO -->

<!-- START:: BOOK HIGHLIGHTS -->
<div class="why_sec">
  <div class="container">
    <div class="header_wraper">
      <h2> Book Highlights </h2>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row icons_wraper justify-content-center mt-3">
      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/contract.png" alt="Why Section Icon 1">
        <h5> 200+ Pages </h5>
      </div>

      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/financ.png" alt="Why Section Icon 1">
        <h5> 500+ Sold Books </h5>
      </div>

      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/contract.png" alt="Why Section Icon 1">
        <h5> Available In PDF </h5>
      </div>

      <div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/team.png" alt="Why Section Icon 1">
        <h5> 20+ Topics </h5>
      </div>

			<div class="col-6 col-md-2 my-2 px-4 text-center">
        <img src="assets/media/icons/contract.png" alt="Why Section Icon 1">
        <h5> Available In Hard Copy </h5>
      </div>
    </div>
  </div>
</div>
<!-- END:: BOOK HIGHLIGHTS -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include('./layouts/TheFooter.php')?>
<!-- END:: INCLUDING THE FOOTER -->