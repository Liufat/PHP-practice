<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/navbar.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <form method="POST" action="" enctype="multipart/form-data" onsubmit="checkForm(); return false;">
                        <!-- #application/x-www-form-urlencoded -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="cb" class="form-check-input" id="cb">
                            <label class="form-check-label" for="cb">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <a href="https://shopping.pchome.com.tw/" onclick="confirm('Buy?') ? null : event.preventDefault()">Pchome</a>
                    <br>
                    <a href="https://shopping.pchome.com.tw/" onclick="return false">Pchome</a><!--停止連結或發送-->

                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . "/parts/script.php"; ?>
<script>
    function checkForm(){
        console.log(cb.checked)
    }
</script>
<?php include __DIR__ . "/parts/html-foot.php"; ?>