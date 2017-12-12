<header class="main">
    <div class="container wide">
        <div class="content slim">
            <div class="set">
                <div class="fill">
                    <a class="tzxpay" href="/">TZX<strong>PAY</strong></a>
                </div>

                <div class="fit">
                    <a class="braintree" href="https://developers.braintreepayments.com/guides/drop-in" target="_blank">TZXPAY-Braintree</a>
                </div>
            </div>
        </div>
    </div>

    <div class="notice-wrapper">
        <?php if(isset($_SESSION["errors"])) : ?>
            <div class="show notice error notice-error">
                <span class="notice-message">
                    <?php
                        echo($_SESSION["errors"]);
                        unset($_SESSION["errors"]);
                    ?>
                <span>
            </div>
        <?php endif; ?>
    </div>
</header>
