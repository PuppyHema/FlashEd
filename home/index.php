<?php

define('TITLE', "Home");
include '../assets/layouts/header.php';
check_verified();

?>


<main role="main" class="container">

    <div class="row">
        <div class="col-sm-3">

            <?php include('../assets/layouts/profile-card.php'); ?>

        </div>
        <div class="col-sm-9">

            <div class="d-flex align-items-center p-3 mt-5 mb-3 text-white-50 bg-purple rounded box-shadow">
                <img class="mr-3" src="../assets/images/logonotextwhite.png" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Hey there, <?php echo $_SESSION['username']; ?></h6>
                    <small>Last logged in at <?php echo date("m-d-Y", strtotime($_SESSION['last_login_at'])); ?></small>
                </div>
            </div>

            <div class="my-3 p-3 bg-white rounded box-shadow">
            
            <div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<div class="overlay"></div>
				<div class="content">
					<h4>UI DESIGN COURSE</h4>
					<h6>3 Hrs | 13 Sections</h6>
				</div>
				<div class="fav">
					<i class="far fa-heart"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<div class="overlay"></div>
				<div class="content">
					<h4>UI DESIGN COURSE</h4>
					<h6>3 Hrs | 13 Sections</h6>
				</div>
				<div class="fav">
					<i class="far fa-heart"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<div class="overlay"></div>
				<div class="content">
					<h4>UI DESIGN COURSE</h4>
					<h6>3 Hrs | 13 Sections</h6>
				</div>
				<div class="fav">
					<i class="far fa-heart"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<div class="overlay"></div>
				<div class="content">
					<h4>UI DESIGN COURSE</h4>
					<h6>3 Hrs | 13 Sections</h6>
				</div>
				<div class="fav">
					<i class="far fa-heart"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<div class="overlay"></div>
				<div class="content">
					<h4>UI DESIGN COURSE</h4>
					<h6>3 Hrs | 13 Sections</h6>
				</div>
				<div class="fav">
					<i class="far fa-heart"></i>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<div class="overlay"></div>
				<div class="content">
					<h4>UI DESIGN COURSE</h4>
					<h6>3 Hrs | 13 Sections</h6>
				</div>
				<div class="fav">
					<i class="far fa-heart"></i>
				</div>
			</div>
		</div>
	</div>
</div>




                </div>
                
                <small class="d-block text-right mt-3">
                    <a href="#">All updates</a>
                </small>
            </div>

        </div>
    </div>
</main>




    <?php

    include '../assets/layouts/footer.php'

    ?>