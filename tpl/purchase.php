<?php
    // Logic for finding status for form
    if ($_POST['prev']) {
        $status = $_POST['status'] - 2;
    } else if ($_POST['cancel']) {
        $status = 1;
    } else {
        $status = (isset($_POST['status']) ? $_POST['status'] : '1');
    }

    // Define the stages
    $stages = array('Postnummer', 'Bestillingsinformasjon', 'Tilleggsprodukter', 'Bekreftelse');

    // Set submit value
    $submitValue = (($status == 4) ? 'Fullfør' : 'Neste');
?>

<div class="page row">

    <section class="columns large-12">

        <ul class="status inline-list">
            <?php foreach ($stages as $key => $stage) { ?>
                <?php $i = $key + 1; ?>
                <li id="<?php echo 'status-' . $i; ?>" class="<?php echo (($i <= $status) ? 'active' : '') ?> <?php echo (($i == $status) ? 'current' : '') ?>">
                    <span class="code"><?php echo $i; ?></span>
                    <p><?php echo $stage; ?></p>
                </li>
            <?php } ?>
        </ul>

        <form class="validate" action="<?php echo $SERVER['PHP_SELF']; ?>" method="post">
            <input type="hidden" name="status" value="<?php echo $status + 1; ?>">

            <?php require_once 'tpl/parts/purchase/stage' . $status . '.php'; ?>

            <?php if ($status > 1 && $status < 4) { ?>
                <input type="submit" class="button" value="Forrige" name="prev">
            <?php } ?>

            <?php if ($status < 4) { ?>
                <input type="submit" class="button next" value="<?php echo $submitValue; ?>" name="next" <?php echo (($status == 3) ? '' : 'disabled' ); ?>>
                <a href="/?p=cart" class="button right">Avbryt</a>
            <?php } ?>

        </form>

    </section>

</div>
