<?php 

function getAlbums() {
   $albums = glob('albums/*');

    return $albums;
}

function getMusic($album) {
    $music= glob("albums/{$album}/music/*mp3");
}
