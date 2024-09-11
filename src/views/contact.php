<form method="POST" action="/contact">
    <div>
        <label class="form-label">Subject</label>
        <input type="text" class="form-control" name="subject">
    </div>
    <div>
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div>
        <label class="form-label">Body</label>
        <textarea class="form-control" name="body"></textarea>
    </div>

    <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
</form>