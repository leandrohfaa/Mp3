<h1>Álbum</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="row">

    <?php
        for ($i=1; $i <=10; $i++):
    ?>
    <div class="col-4 album">
        <a href="">
            <img src="/Mp3/albums/ben.jpg" alt="<?$i?>" class="img-albums">
            <h4>Álbum <?php echo $i ?></h4>
        </a>
    </div>
    <?php
        endfor;
    ?>
</div>