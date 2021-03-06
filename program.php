<?php
require './vendor/kint.phar';

include __DIR__ . '/lib/header.php';
include __DIR__ . '/lib/functions.php';

$user = unserialize($_COOKIE['531_user']);
$Edmar = isset($user['Edmar']) ? 'Yes' : 'No';

if ($user['name'] === 'Clara' || $user['name'] === 'clara') {
    $user['name'] = '❤️ Clara ❤️';
}
?>


<body>
<div class="layout---line layout--weightRM-box">
    <div class="layout---unit">
        <h2 class="heading--smallcaps">LIFTER <span class="result--heading"><?php echo $user['name']; ?></span></h2>
        <h2 class="heading--smallcaps">press <span class="result--heading"><?php echo $user['press']; ?></span></h2>
        <h2 class="heading--smallcaps">deadlift <span class="result--heading"><?php echo $user['deadlift']; ?></span>
        </h2>
        <h2 class="heading--smallcaps">benchpress <span class="result--heading"><?php echo $user['bench']; ?></span>
        </h2>
        <h2 class="heading--smallcaps">squat <span class="result--heading"><?php echo $user['squat']; ?></span></h2>
    </div>

</div>
<!------------------ Mobile Menu ---------------->
<?php include __DIR__ . '/lib/parts-mobilemenu.php'; ?>


<div class="layout---line">

    <!------------------ WAVE 1 ---------------->
    <article id="wave-1" class="wave-1 layout---unit">
        <div class="heading">
            <h3 class="type--heading-wave">Wave 1</h3>
        </div>


        <section class="lift <?php echo ($user['press'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Press</h3>
            <?php
            calculateWave($user['press'], 1, 65, 75, 85);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/bench.php';
            } else {
                include __DIR__ . '/lib/assistance/press.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['deadlift'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Deadlift</h3>
            <?php
            calculateWave($user['deadlift'], 1, 65, 75, 85);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/squat.php';
            } else {
                include __DIR__ . '/lib/assistance/deadlift.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['bench'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Bench</h3>
            <?php
            calculateWave($user['bench'], 1, 65, 75, 85);
            if ($Edmar === 'Yes') {
                include __DIR__ . '/lib/assistance/press.php';
            } else {
                include __DIR__ . '/lib/assistance/bench.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['squat'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Squat</h3>
            <?php
            calculateWave($user['squat'], 1, 65, 75, 85);
            if ($Edmar === 'Yes') {
                include __DIR__ . '/lib/assistance/deadlift.php';
            } else {
                include __DIR__ . '/lib/assistance/squat.php';
            } ?>
        </section>

    </article>


    <!------------------ WAVE 2 ---------------->

    <article id="wave-2" class="wave-2 layout---unit">
        <div class="heading">
            <h3 class="type--heading-wave">Wave 2</h3>
        </div>


        <section class="lift <?php echo ($user['press'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Press</h3>
            <?php
            calculateWave($user['press'], 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/bench.php';
            } else {
                include __DIR__ . '/lib/assistance/press.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['deadlift'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Deadlift</h3>
            <?php
            calculateWave($user['deadlift'], 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/squat.php';
            } else {
                include __DIR__ . '/lib/assistance/deadlift.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['bench'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Bench</h3>
            <?php
            calculateWave($user['bench'], 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/press.php';
            } else {
                include __DIR__ . '/lib/assistance/bench.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['squat'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Squat</h3>
            <?php
            calculateWave($user['squat'], 2, 70, 80, 90);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/deadlift.php';
            } else {
                include __DIR__ . '/lib/assistance/squat.php';
            } ?>
        </section>

    </article>


    <!------------------ WAVE 3 ---------------->

    <article id="wave-3" class="wave-3 layout---unit">
        <div class="heading">
            <h3 class="type--heading-wave">Wave 3</h3>
        </div>


        <section class="lift <?php echo ($user['press'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Press</h3>
            <?php
            calculateWave($user['press'], 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/bench.php';
            } else {
                include __DIR__ . '/lib/assistance/press.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['deadlift'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Deadlift</h3>
            <?php
            calculateWave($user['deadlift'], 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/squat.php';
            } else {
                include __DIR__ . '/lib/assistance/deadlift.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['bench'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Bench</h3>
            <?php
            calculateWave($user['bench'], 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/press.php';
            } else {
                include __DIR__ . '/lib/assistance/bench.php';
            } ?>
        </section>

        <section class="lift <?php echo ($user['squat'] == 0 ? 'dont-show' : ''); ?>">
            <h3 class="heading-lift">Squat</h3>
            <?php
            calculateWave($user['squat'], 3, 75, 85, 95);
            if ($Edmar == 'Yes') {
                include __DIR__ . '/lib/assistance/deadlift.php';
            } else {
                include __DIR__ . '/lib/assistance/squat.php';
            } ?>
        </section>

    </article>

</div><?php //--layout---line ?>

<!---------- NEW PROGRAM -------->
<section class="weight-input">
    <form action="action.php" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" required="required" value="<?php echo $user['name']; ?>">
        <br>
        <label for="press">Press: </label>
        <input type="tel" name="press" required="required" value="<?php echo $user['press'] + 2.5; ?>">
        <br>
        <label for="deadlift">Deadlift: </label>
        <input type="tel" name="deadlift" required="required" value="<?php echo $user['deadlift'] + 5; ?>">
        <br>
        <label for="bench">Bench: </label>
        <input type="tel" name="bench" required="required" value="<?php echo $user['bench'] + 2.5; ?>">
        <br>
        <label for="squat">Squat: </label>
        <input type="tel" name="squat" required="required" value="<?php echo $user['squat'] + 5; ?>">
        <br>
        <span class="label">Edmar it up:<input type="checkbox" name="Edmar" value="Yes"/></span>
        <br>
        <input type="submit">
</section>
<!---------------------	CHARTS ---------------------->

<footer>
</footer>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

<script>
    $('.lift').click(function () {
        $(this).find('.total').fadeToggle("fast");
    });
</script>
</body>
</html>
