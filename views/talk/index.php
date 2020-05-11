<?php include_once '../../controller/c_talk.php'?>
<?php include_once '../templates/header.php' ?>
<style type="text/css">
    html, body, .block {
        height: 100% !important;
    }
</style>
<main>


    <div id="WallOfFame" class="block white">
        <nav class="gold-back">
            <div class="nav-wrapper black-back">
                <a href="#WallOfFame" class="brand-logo right"><i class="material-icons">forum</i></a>
            </div>
        </nav>
    </div>

    <div id="players" class="block white">
        <nav class="gold-back">
            <div class="nav-wrapper black-back">
                <a href="#players" class="brand-logo right"><i class="material-icons">wc</i></a>
            </div>
        </nav>

        <div class="row">

            <?php foreach ($tab as $row) { ?>


                    <div class="col xs3 s12 m6 l4 xl3 ">
                        <div class="card gold-back min-500">
                            <div class="firstFont row">
                                <p class="flow-text col s12 margin-b-10 center-align"><i class="tiny material-icons circle border-gold-round gold-back">grade</i><?= $row->pseudo ?><i class="tiny material-icons circle border-gold-round gold-back">grade</i></p>
                                <p class="col s12 text-contrast firstFont center-align"><?= $row->description ?></p>
                            </div>
                        </div>
                    </div>

            <?php } ?>
        </div>

    </div>

</main>

<script src="../../assets/js/pushpin.js"></script>
<script src="../../assets/vendor/materialize.js"></script>
<script src="../../assets/js/console.js"></script>
</body>
</html>
