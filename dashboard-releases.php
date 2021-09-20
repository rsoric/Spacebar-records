<?php 
      include_once "dashboard-header.php";
      include_once "Backend/releases.php";
?>

<div class="container-fluid dashboard-content">
  <div class="row">
    <div class="col-3">
      <a href="dashboard-add-release.php">
      <input style="margin-bottom:20px;" class="product-edit-button" type="submit" value="Add release" id="add-release">
       </a>
    </div>
  </div>
    <div class="row">
        <div class="col-11">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">Cover</th>
              <th scope="col">Cat. number</th>
              <th scope="col">Artist name</th>
              <th scope="col">Title</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
          <?php $releases = $_releases->getDBdata();
            while($album = $releases->fetch()) :?>
              <tr>
                <form id="edit-form" action="dashboard-edit-release.php" method="post">
                  <th style="display: none;" scope="row">
                    <input type="hidden" name="albumID" value="<?= htmlspecialchars($album['albumID'])?>">
                  </th>
                  <th style="display: none;">
                    <input type="hidden" name="albumCover" value="<?= htmlspecialchars($album['albumCover'])?>">
                  </th>
                  <th scope="row">
                    <input type="hidden" name="albumImg" value="<?= htmlspecialchars($album['albumImg'])?>">
                    <img src="<?= htmlspecialchars($album['albumImg'])?>" class="img-responsive catalogue-cover" loading = "lazy">
                  </th>
                  <td class="align-middle">
                    <input type="hidden" name="catalogueID" value="<?= htmlspecialchars($album['catalogueID'])?>">
                    <?= htmlspecialchars($album['catalogueID']) ?>
                  </td>
                  <td class="align-middle">
                    <input type="hidden" name="albumAutor" value="<?= htmlspecialchars($album['albumAutor'])?>">
                    <?= htmlspecialchars($album['albumAutor']) ?>
                  </td>
                  <td class="align-middle">
                    <input type="hidden" name="albumName" value="<?= htmlspecialchars($album['albumName'])?>">
                    <?= htmlspecialchars($album['albumName']) ?>
                  </td>
                  <th style="display: none;" scope="row">
                    <input type="hidden" name="albumTracks" value="<?= $album['albumTracks']?>">
                  </th>
                  <th style="display: none;" scope="row">
                    <input type="hidden" name="albumDescription" value="<?= $album['albumDescription']?>">
                  </th>
                  <td class="align-middle">
                    <input class="product-edit-button" type="submit" name="submit" value="Edit" id="product-edit-1">
                  </td>
                </form>
              </tr>
          <?php 
            endwhile; ?>
          </tbody>
        </table>
        
      </div>
      </div>
      
</div>

<?php include "dashboard-footer.php";?>