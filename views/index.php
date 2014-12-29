<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Become a member - Cowork Niagara</title>
    <link rel="stylesheet" href="assets/vendor/normalize.css">
    <link rel="stylesheet" href="assets/main.css">
</head>
<body>
    <header>
        <section>
            <a href="http://coworkniagara.com">
                <img src="assets/logo-horizontal.svg" height="80">
            </a>
        </section>
    </header>

    <form method="POST">
        <section>
            <main>
                <h2>Your Information</h2>

                <div class="field">
                    <label>First Name</label>
                    <input type="text">
                </div>

                <div class="field">
                    <label>Last Name</label>
                    <input type="text">
                </div>

                <div class="field">
                    <label>Company Name</label>
                    <input type="text" placeholder="Optional">
                </div>

                <div class="field">
                    <label>Address</label>
                    <input type="text">
                </div>

                <div class="field">
                    <label>Address 2</label>
                    <input type="text" placeholder="Apt, Suite, etc">
                </div>

                <div class="field">
                    <label>City</label>
                    <input type="text">
                </div>

                <div class="field">
                    <label>Postal Code</label>
                    <input type="text" placeholder="L#L #L#">
                </div>

                <div class="field">
                    <label>Phone Number</label>
                    <input type="text" placeholder="905-555-1212">
                </div>
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
                <h2>Email Address</h2>

                <div class="field">
                    <label>Email Address</label>
                    <input type="email" placeholder="your@emailaddress.com">
                </div>

                <div class="field">
                    <label>Confirm Email Address</label>
                    <input type="email" placeholder="your@emailaddress.com">
                </div>

                <div class="field">
                    <label>Newsletter Signup</label>
                    <input type="checkbox">
                </div>
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
                <h2>Membership Type</h2>

                <div class="field">
                    <label>Individual</label>
                    <input type="radio" name="membership_type">
                </div>

                <div class="field">
                    <label>Corporate</label>
                    <input type="radio" name="membership_type">
                </div>
            </main>

            <aside>
                <h3>Which one is for me?</h3>

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
                <div class="field">
                    <label>Credit Card</label>
                    <input type="text">
                </div>

                <div class="field">
                    <label>Name on Card</label>
                    <input type="text">
                </div>

                <div class="field">
                    <label>Expiration</label>
                </div>

                <div class="field">
                    <label>CVC</label>
                    <input type="text" maxlength="4">
                </div>
            </main>

            <aside>
                <h3>

                <p>
                    Our website is secured with 256-bit SHA encryption.
                    <!-- TODO: more info -->
                </p>
            </aside>
        </section>

        <section>
            <button type="submit">Signup</button>
        </section>
    </form>

    <script src="assets/main.js"></script>
</body>
</html>
