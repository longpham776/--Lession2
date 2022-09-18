<?php
    include "./config.php";
    if(!isset($_SESSION)) session_start();
	function loadClass($c){
		include "./class/$c.php";
	}
	spl_autoload_register("loadClass");
    $controller= Utilities::get("controller", 'product');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Product Manager</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  </head>
  <body>
    <div class="d-flex justify-content-center">
        <div class="container">
            <div class="border border-success">
                <!--Start Navigation Bar-->
                <?php
                    include "./pages/navbar.php"
                ?>
                <!--End Navigation Bar-->

                <!--Start Category-->
                <?php
                    switch ($controller) {
                        case 'product':
                            include "./controller/product.php";
                            break;
                        case 'category':
                            include "./controller/category.php";
                            break;
                        default:
                            # code...
                            break;
                    }
                ?>
                <!--End Category-->

                <!--Start Footer-->
                <?php
                    include "./pages/footer.php"
                ?>
                <!--End Footer-->
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>