<?php
  //session_start();
 // $count = 0;
  // connecto database
 session_start();
if(!isset($_SESSION['id'])){
  header("location:login.php");
}

  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $row = select4LatestBook($conn);
?>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted" style="text-transform: uppercase;
    margin-bottom: 30px;
    color: black;
    font-size: 30px;">Latest product</p>
    <span class="border" style="display: block;
    margin: auto;
    width: 160px;
    height: 3px;
    background: #3498db;
    margin-bottom: 40px;"></span>
      <div class="row">
        <?php foreach($row as $book) { ?>
      	<div class="col-md-3">
      		<a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
           <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
<br>
<br>
<div class="team-sections">
  <h1>Our Top Brands</h1>
  <span class="border"></span>
  <div class="ps">
    <a href="#p1"><img src="ha.jpg" style="width: 160px;height: 160px;" alt=""></a>
    <a href="#p2"><img src="pa.png"style="width: 160px;height: 170px;" alt=""></a>
    <a href="#p3"><img src="sa.jpg" style="width: 160px;height: 160px;"alt=""></a>
  </div>

<div class="sections" id="p1">
  <span class="name">Havells</span>
  <span class="border"></span>
  <p>
    Havells India Limited is a Fast Moving Electrical Goods (FMEG) Company with an extremely strong global presence, thanks to our philosophy of Make in India, extensive distribution network and world class quality.
  </p>
</div>
<div class="sections" id="p2">
  <span class="name">Philips</span>
  <span class="border"></span>
  <p>
    Koninklijke Philips N.V. (literally Royal Philips, stylized as PHILIPS) is a Dutch multinational conglomerate corporation headquartered in Amsterdam, one of the largest electronics companies in the world, currently focused in the area of healthcare and lighting.
  </p>
</div>
<div class="sections" id="p3">
  <span class="name">Syska</span>
  <span class="border"></span>
  <p>
   In 1989, the SSK Group set up its flagship company, Shree Sant Kripa Appliances Pvt. Ltd. Over the last two decades, the SSK Group's pursuit of perfection has made the Group a name to reckon with across numerous verticals.
  </p>
</div>
</div>

<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>
<style type="text/css">
  *{
    font-family: sans-serif;

  }
  .team-sections{
    overflow: hidden;
    text-align: center;
    background: #eee;
    padding: 60px;
  }
  .team-sections h1{
    text-transform: uppercase;
    margin-bottom: 30px;
    color: black;
    font-size: 40px;
  }
  .border{
    display: block;
    margin: auto;
    width: 160px;
    height: 3px;
    background: #3498db;
    margin-bottom: 40px;
  }
  .ps{
    margin-bottom: 40px;
  }
  .ps a{
    display: inline-block;
    margin: 0 30px;
    width: 160px;
    height: 160px;
    overflow: hidden;
    border-radius: 50%;
  }
  .ps a img{
    width: 100%;
    /*filter: grayscale(100%);*/
    transition: 0.4s all;
  }
  .ps a:hover  >img{
    filter: none;
  }
  .sections{
    width: 600px;
    margin: auto;
    font-size: 20px;
    color: black;
    text-align: justify;
    height: 0;
    overflow: hidden;
  }
  .sections:target{
    height: auto;
  }
  .name{
    display: block;
    margin-bottom: 30px;
    text-align: center;
    text-transform: uppercase;
    font-size: 22px;
  }
</style>