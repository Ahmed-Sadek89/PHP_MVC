<h3>Create an account</h3>
<form method="POST" action="/register">
    <div class="row">
        <div class="col">
            <label class="form-label">Firstname</label>
            <input type="text" class="form-control" name="firstname">
        </div>
        <div class="col">
            <label class="form-label">Lastname</label>
            <input type="text" class="form-control" name="lastname">
        </div>
    </div>
    <div>
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div>
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div>
        <label class="form-label">Confirm password</label>
        <input type="password" class="form-control" name="confirm-password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
</form>