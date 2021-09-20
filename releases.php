<?php include_once "header.php";

define("FS_ROOT", realpath(dirname(__FILE__)));
include_once FS_ROOT.'\Backend\releases.php'; ?>

<main class="px-3">

  <div class="row">
    
    <table class="table">
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
      <?php 
      $releases = $_releases->getDBdata();
      while($album = $releases->fetch()):?>
        <tr>
          <form action="release.php" method="post">
          <th style="display: none;">
            <input type="hidden" name="catalogueID" value="<?= htmlspecialchars($album['catalogueID'])?>">
          </th>
          <th scope="row">
            <input type="hidden" name="albumImg" value="<?= htmlspecialchars($album['albumImg'])?>">
            <img src="<?= htmlspecialchars($album['albumImg'])?>" class="img-responsive catalogue-cover" loading = "lazy">
          </th>
          <th style="display: none;">
            <input type="hidden" name="albumCover" value="<?= htmlspecialchars($album['albumCover'])?>">
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
          <th style="display: none;">
            <input type="hidden" name="albumTracks" value="<?= $album['albumTracks']?>">
          </th>
          <th style="display: none;">
            <input type="hidden" name="albumDescription" value="<?= $album['albumDescription']?>">
          </th>
          <td class="align-middle">
            <input  class="product-edit-button" type="submit" value="View" id="view-release">
          </td>
          </form>
        </tr>
      <?php
      endwhile; ?>
      </tbody>
    </table>
    
  </div>

</main>

<?php include_once('footer.php'); ?>

