<?php $numberSet = $_POST['numberSet'];
$difficulty = $_POST['difficulty'];


?>


<?php include "header.php" ?>
    <section class="container mt-3 text-center d-flex flex-column align-items-center">
        <h1>
            Multiplication Table
        </h1>
        <h2>Difficulty: <?= $difficulty ?></h2>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Your task
                </div>
                <div class="card-body">
                    <table class="table table1">
                        <?php for ($i = 1; $i <= $numberSet; $i++) { ?>
                            <tr>
                                <?php for ($j = 1; $j <= $numberSet; $j++) { ?>
                                    <td class="<?= ($i == 1 || $j == 1) ? 'header' : '' ?>">


                                        <?= (rand(0, 100) < $difficulty) ? $i * $j : "" ?>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>

    </section>

<?php include "footer.php" ?>