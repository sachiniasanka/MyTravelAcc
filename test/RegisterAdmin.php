
<?php
require "headerAdmin.php";
?>


<br>
<br>


<!--<section class="module bg-dark-30" data-background="assets/images/section-4.jpg">-->

<section class="module bg-dark-30" data-src="assets/images/big">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1 class="module-title font-alt mb-0">Register</h1>
            </div>
        </div>
    </div>
</section>

<section class="module">
    <div class="container">
        <div class="row">

            <div class="col-sm-5">
                <h4 class="font-alt">Register</h4>
                <hr class="divider-w mb-10">
                <form class="form">
                    <div class="form-group">
                        <input class="form-control" id="E-mail" type="text" name="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="username" type="text" name="username" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="re-password" type="password" name="re-password" placeholder="Re-enter Password"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-round btn-b">Register</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require "footer.php";
?>