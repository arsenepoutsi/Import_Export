<!doctype html>
<html lang="en">
  
  <?php include("include/head.php"); ?>

  <body class="bg-light">

  <?php
	          if (isset($_GET['page']))
	          {
	              $page = $_GET['page'];
	          }else{
	              $page = "";
	          }

	          switch ($page) {
	                case 'home':
	                    include 'app/home.php';
                      break;
                  case 'amazon':
                      include 'app/amazon/amazonsrdi.php';
                      break;
                  case 'cdiscount':
                      include 'app/cdiscount/cdiscountsrdi.php';
                      break;
                  case 'rakuten':
                      include 'app/rakuten/rakutensrdi.php';
                      break;
                  case 'rezervoir':
                      include 'app/rezervoir/rezervoirsrdi.php';
                      break;

	                default:
	                    include 'app/home.php';
	                    break;
	          }
		?>

    <?php include("include/script.php"); ?>

  </body>
</html>
