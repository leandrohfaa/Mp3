<h1>Álbum</h1>

<div class="row">
    <?php
        for ($i=1; $i <=10; $i++):
    ?>
    <div class="col-3 album">
        <a href="">
            <img src="/Mp3/albums/ben.jpg" alt="<?$i?>" class="img-albums">
            <h4>Álbum <?$i?></h4>
        </a>
    </div>
    <?php
        endfor;
    ?>
</div>