<?php include 'connection.php' ?>
<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRY To Learn</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center my-5">
                    <h1 class="display-1">Build U'r <span class="text-success">Skill</span></h1>
                    <h4 class="text-success">Virtual training platform</h4>
                    <p class="text-success fw-bold">Learn today for better tomorrow</p>

                    <?php
                    if (!isset($_SESSION['email'])) {

                        ?>
                        <a class="btn btn-success" href="#register">Register Now</a>
                        <?php
                    }
                    ?>




                </div>
                <div class="col-md-6 text-center">
                    <img src="assets/img/home/banner_image.png" class="img-fluid mx-auto d-block" alt="Image">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <h2 class="text-center fw-bold mt-5">WHY CHOOSE US</h2>
        <div class="row mt-5 pb-5">
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/One-to-one.png" class="card-img-top mx-auto d-block mt-3"
                        alt="Professional Mentoring" style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title mt-3">Professional Mentoring</h4>
                        <p class="card-text">One-to-one mentorship from Experts</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/Challenge.png" class="card-img-top mx-auto d-block mt-3"
                        alt="Gain work-experience" style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title mt-3">Gain work-experience</h4>
                        <p class="card-text">Challenge and Task-based learning</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/Placement.png" class="card-img-top mx-auto d-block mt-3"
                        alt="Great Career" style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title mt-3">Great Career</h4>
                        <p class="card-text ">100% Life-long Placement Assistance</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/Time.png" class="card-img-top mx-auto d-block mt-3" alt="Quality Classes"
                        style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title mt-3">Quality Classes</h4>
                        <p class="card-text ">Live Online sessions & flexible timing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id='courses'>
        <h2 class="text-center fw-bold mt-5">Trending Programs</h2>
        <p class="text-center">Choose your Internship Program</p>
        <div class="row mt-5 pb-5">
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/pythn.jpeg" class="card-img-top mx-auto d-block mt-3 h-100"
                        alt="Python Programming" style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">PYTHON DJANGO</h4>
                        <a href="python.php"><button class="btn btn-warning">More details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/fltr.png" class="card-img-top mx-auto d-block mt-3 h-100"
                        alt="Flutter Developer" style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title">FLUTTER DEVELOPER</h4>
                        <a href="flutter.php"><button class="btn btn-warning">More details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-2">
                <div class="card shadow h-100">
                    <img src="assets/img/home/ui.png" class="card-img-top mx-auto d-block mt-3 h-100"
                        alt="UI/UX Developer" style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title mt-3">UI/UX DEVELOPER</h4>
                        <a href="ux.php"><button class="btn btn-warning">More details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 ">
                <div class="card shadow h-100">
                    <img src="assets/img/home/mrn.jpeg" class="card-img-top mx-auto d-block mt-3 h-100" alt="MERN Stack"
                        style="max-width: 100px;">
                    <div class="card-body text-center">
                        <h4 class="card-title mt-3">MERN STACK</h4>
                        <a href="mern_stack.php"><button class="btn btn-warning">More details</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script> -->
</body>

</html>



<?php
if (isset($_SESSION['email'])) {
    include 'myprogram.php';
} else {
    include 'registration.php';
}
?>

<?php include 'about.html' ?>
<!-- <?php ?> -->
<?php include 'footer.php' ?>