<?php include_once "header.php";
      include_once "Backend/functions.php";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $catalogueID = sanitizeInput($_POST["catalogueID"]);
  $albumName = sanitizeInput($_POST["albumName"]);
  $albumImg = sanitizeInput($_POST["albumImg"]);
  $albumCover = sanitizeInput($_POST["albumCover"]);
  $albumAutor = sanitizeInput($_POST["albumAutor"]);
  $albumTracks = sanitizeInput($_POST["albumTracks"]);
  $albumDescription = sanitizeInput($_POST["albumDescription"]);
}


?>

<main class="px-3">

  <div class="row">
    <div class="col">
      <p style="color:gray; margin: 3rem;">
      <?= htmlspecialchars($catalogueID) ?>     
      </p>
    </div>
  </div>

  <div class="row">

  <div class="col-md-6">

    <img src="<?= htmlspecialchars($albumImg)?>" class="img-responsive album-details-img">

    <img src="<?= htmlspecialchars($albumCover)?>" class="img-responsive album-details-img">
  
  </div>

  <div class="col-md-6 ">
    <h1 style="margin-top:20px;"><?= htmlspecialchars($albumName) ?>  </h1>
    <h2><?= htmlspecialchars($albumAutor) ?>  </h2>
    <p style="text-align: justify; margin-top:20px;"><b>Description</b></p>
    <p style="text-align: justify; margin-top:20px;"><?= nl2br($albumDescription)?></p>
    <p style="text-align: justify; margin-top:35px;"><b>Tracklist:</b></p>
    <p style="text-align: justify; margin-top:20px;">
    <?= nl2br($albumTracks)?>  
    </p>
  </div>
    
  </div>

</main>

<?php include_once('footer.php'); ?>

