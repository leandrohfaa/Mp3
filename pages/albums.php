<h1>Álbum</h1>

<a href="?pages=new_album" class="btn btn-success">Adicionar Álbum</a>
<hr>

<div class="row">
    <?php
        $albums = getAlbums();

        foreach ($albums as $album):
            $infoAlbum = explode('/', $album);
            $nameAlbum = $infoAlbum[1];
            $imgAlbum = "{$album}/{$nameAlbum}.jpeg";
    ?>
    <div class="col-3 album">
        <a href="?pages=music&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="img-album">
            <h4><?=$nameAlbum?></h4>
        </a>
    </div>
    <?php
        endforeach;
    ?>
</div>

