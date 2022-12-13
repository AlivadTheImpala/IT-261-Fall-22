<?php
//we will use a foreach loop for our errors
//if we have more than ZERO errors, we will need to echo our message. 

if (count($errors) > 0) : ?>
    <div class="error">

        <?php foreach ($errors as $error) : ?>
            <p>
                <?= $error ?>

            </p>

        <?php endforeach; ?>

    </div>
    <!-- end div error -->

<?php endif; ?>