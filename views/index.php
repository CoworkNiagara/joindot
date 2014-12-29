<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Become a member - Cowork Niagara</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="assets/vendor/normalize.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <header>
        <div>
            <a href="http://coworkniagara.com">
                <img src="assets/logo-horizontal.svg" height="80">
            </a>
        </div>
    </header>

    <form id="signup-form" method="POST" autocomplete="on" novalidate>
        <section>
            <main>
                <fieldset>
                    <legend>Your Information</legend>

                    <div class="field required">
                        <label>First Name</label>
                        <input type="text" required>
                    </div>

                    <div class="field required">
                        <label>Last Name</label>
                        <input type="text" required>
                    </div>

                    <div class="field">
                        <label>Company Name</label>
                        <input type="text" placeholder="Optional">
                    </div>

                    <div class="field required">
                        <label>Address</label>
                        <input type="text" required>
                    </div>

                    <div class="field">
                        <label>Address 2</label>
                        <input type="text" placeholder="Apt, Suite, etc">
                    </div>

                    <div class="field required">
                        <label>City</label>
                        <input type="text" required>
                    </div>

                    <div class="field required">
                        <label>Postal Code</label>
                        <input type="text" size="10" placeholder="L#L #L#" required>
                    </div>

                    <div class="field required">
                        <label>Phone Number</label>
                        <input type="text" placeholder="905-555-1212" required>
                    </div>
                </fieldset>
            </main>

            <aside>
                <h3>Why do we need this?</h3>

                <p>
                    To satisfy the FSCO laws that govern co-operatives,
                    we have to collect and maintain names and addresses for all
                    of our members, past and present.
                </p>
            </aside>
        </section>

        <section>
            <main>
                <fieldset>
                    <legend>Email &amp; Newsletter</legend>

                    <div class="field required">
                        <label>Email Address</label>
                        <input type="email" placeholder="your@emailaddress.com" required>
                    </div>

                    <div class="field required">
                        <label>Confirm Email Address</label>
                        <input type="email" placeholder="your@emailaddress.com" required>
                    </div>

                    <div class="field">
                        <label>
                            <input type="checkbox">
                            Yes, sign me up to the Cowork Niagara Newsletter
                        </label>
                    </div>
                </fieldset>
            </main>

            <aside>
                <h3>No SPAM here</h3>

                <p>
                    By providing us your email address, we promise to treat
                    it sacredly, and never send you any piece of mail that
                    could remotely be considered a mystery meat.
                </p>

                <p>
                    Our newsletter contains some helpful information and
                    occasional updates on the Cowork community, events, and
                    our space. Unsubscribe at any time.
                </p>
            </aside>
        </section>

        <section>
            <main>
                <fieldset>
                    <legend>Membership Type</legend>

                    <div class="field">
                        <label>
                            <input type="radio" name="membership_type">
                            Individual - $125.00 per year
                        </label>
                    </div>

                    <div class="field">
                        <label>
                            <input type="radio" name="membership_type">
                            Corporate - $250.00 per year
                        </label>
                    </div>
                </fieldset>
            </main>

            <aside>
                <h3>How do I choose?</h3>

                <p>
                    <strong>Individual:</strong>

                    You wear all the hats at your company. You are most likely
                    registered as a sole-proprietor.
                </p>

                <p>
                    <strong>Corporate:</strong>

                    You have a payroll, you pay employees.
                </p>
            </aside>
        </section>

        <section>
            <main>
                <fieldset>
                    <legend>Payment Information</legend>

                    <div class="payment-errors"></div>

                    <div class="field required">
                        <label>Card Number</label>
                        <input type="text" class="cc-num" pattern="\d*" autocomplete="cc-number" required>
                    </div>

                    <div class="field required">
                        <label>Name on Card</label>
                        <input type="text" required>
                    </div>

                    <div class="field required">
                        <label>Expiry</label>
                        <input type="text" class="cc-exp" size="12" placeholder="MM / YYYY" autocomplete="cc-exp" required>
                    </div>

                    <div class="field required">
                        <label>CVC</label>
                        <input type="text" class="cc-cvc" size="4" autocomplete="off">
                    </div>
                </fieldset>

                <button type="submit">Sign me up!</button>
            </main>

            <aside>
                <h3>

                <p>
                    Our website is secured with 256-bit SHA encryption.
                    <!-- TODO: more info -->
                </p>
            </aside>
        </section>
    </form>

    <script src="assets/vendor/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey("<?= STRIPE_PUBLIC_KEY ?>");
    </script>
    <script src="assets/vendor/jquery.payment.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
