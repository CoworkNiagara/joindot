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
                <img src="assets/logo-horizontal.svg" height="60">
            </a>
        </div>
    </header>

    <h1>Join the Cowork Niagara Co-operative</h1>

    <form id="signup-form" method="POST" autocomplete="on" novalidate data-parsley-validate>
        <section>
            <main>
                <fieldset>
                    <legend>Your Information</legend>

                    <div class="field required">
                        <label>First Name</label>
                        <input type="text" name="first_name" required>
                    </div>

                    <div class="field required">
                        <label>Last Name</label>
                        <input type="text" name="last_name" required>
                    </div>

                    <div class="field">
                        <label>Company Name</label>
                        <input type="text" name="company_name" placeholder="Optional">
                    </div>

                    <div class="field required">
                        <label>Address</label>
                        <input type="text" name="address" required>
                    </div>

                    <div class="field">
                        <label>Address 2</label>
                        <input type="text" name="address_2" placeholder="Apt, Suite, etc">
                    </div>

                    <div class="field required">
                        <label>City</label>
                        <input type="text" name="city" required>
                    </div>

                    <div class="field required">
                        <label>Postal Code</label>
                        <input type="text" name="postal_code" size="10" required data-parsley-minlength="6">
                    </div>

                    <div class="field required">
                        <label>Phone Number</label>
                        <input type="text" name="phone_number" placeholder="905-555-1212" required data-parsley-minlength="10">
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

                <p>
                    Be assured that we do not rent, sell, lease, or provide your information to other parties.
                </p>
            </aside>
        </section>

        <section>
            <main>
                <fieldset>
                    <legend>Email &amp; Newsletter</legend>

                    <div class="field required">
                        <label>Email Address</label>
                        <input type="email" name="email_address" id="email_address" placeholder="your@emailaddress.com" required>
                    </div>

                    <div class="field required">
                        <label>Confirm Email Address</label>
                        <input type="email" placeholder="your@emailaddress.com" required data-parsley-equalto="#email_address">
                    </div>

                    <div class="field">
                        <label>
                            <input type="checkbox" name="newsletter_signup" value="1" checked>
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
                            <input type="radio" name="membership_type" value="Individual Membership" required>
                            Individual - $125.00 per year
                        </label>
                    </div>

                    <div class="field">
                        <label>
                            <input type="radio" name="membership_type" value="Corporate Membership" required>
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
                        <input type="text" class="cc-name" required>
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
                <h3>We own tinfoil hats</h3>

                <p>
                    Our website is secured with 256-bit SHA encryption. For your security, we do not store your credit card
                    information.
                </p>

                <p>
                    Charges will appear on your credit card statement as COWORKNIAGARA.COM.
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
    <script src="assets/vendor/parsley.min.js"></script>
    <script src="assets/main.js"></script>
</body>
</html>
