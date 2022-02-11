<main class="form-signin">
    <form method="post" action="login.php">
        <div class="login-container-wrapper clearfix">
            <img class="mb-4" src="../assets/brand/recycle.svg" alt="logo" width="280" height="140">
            <h2 class="h3 mb-3 fw-normal">Log in</h2>

            <div class="form-floating">
                <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3 ">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary hvr-grow" type="submit">Sign in</button>
        </div>
    </form>
</main>