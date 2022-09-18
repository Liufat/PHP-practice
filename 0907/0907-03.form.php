<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/navbar.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>

                    <form name="form1" method="POST" action="" enctype="multipart/form-data" onsubmit="return checkForm();">
                        <!-- <<<<===== -->
                        <!-- #application/x-www-form-urlencoded -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" name="info[email]" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="info[password]" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="mydate" class="form-label">日期</label>
                            <input type="date" name="time[]" class="form-control" id="mydate">
                        </div>
                        <div class="mb-3">
                            <label for="mydatetime" class="form-label">日期+時間</label>
                            <input type="datetime-local" name="time[]" class="form-control" id="mydatetime">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" name="cb" class="form-check-input" id="cb">
                            <label class="form-check-label" for="cb">Check me out</label>
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <a href="https://shopping.pchome.com.tw/" onclick="confirm('Buy?') ? null : event.preventDefault()">Pchome</a>
                    <br>
                    <a href="https://shopping.pchome.com.tw/" onclick="return false">Pchome</a>

                </div>
            </div>
        </div>

        <pre><?php print_r($_POST) ?></pre>
    </div>
</div>

<?php include __DIR__ . "/parts/script.php"; ?>
<script>
    function checkForm() {

        if (!cb.checked) {
            alert('請勾選');
            return false;
        }
    }

    // document.forms
    // documnet.form1
    // document.form1.elements
    // document.form1.elements[0]
    // document.form1.elements['email']
    // document.form1.email
</script>
<?php include __DIR__ . "/parts/html-foot.php"; ?>