<?php require __DIR__ . '/parts/connect_db.php';
$pageName = 'loginAdmin';
?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/navbar-admin.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">登入頁面</h5>

                    <form name="form1" onsubmit="checkForm(); return false">
                        <!-- <<<<===== -->
                        <!-- #application/x-www-form-urlencoded -->
                        <div class="mb-3">
                            <label for="email" class="form-label">帳號</label>
                            <input type="text" name="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">密碼</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3 form-check">
                            <button type="submit" class="btn btn-primary">送出</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . "/parts/script.php"; ?>
<script>
    function checkForm() {
        const fd = new FormData(document.form1);

        fetch('login-admin-api.php', {
                method: 'post',
                body: fd,
            })
            .then(r => r.json())
            .then(obj => {
                console.log(obj);
            })


        // fetch('login-api.php' ,{
        //     method: 'post',
        //     body: fd,
        // }).then(function(response){
        //     return response.text();
        // }).then(function(result){
        //     console.log(result);
        // })
    }

    // document.forms
    // documnet.form1
    // document.form1.elements
    // document.form1.elements[0]
    // document.form1.elements['email']
    // document.form1.email
</script>
<?php include __DIR__ . "/parts/html-foot.php"; ?>