<?php include "header.php";?>
<main>
    <section class="container py-5">
        <h1 class="text-muted">Proin euismod nisl id nisl consectetur porttitor</h1>
        <p>Pellentesque consequat fringilla nibh. Nunc quis ante ligula. Duis laoreet diam nisl, tincidunt ultricies velit interdum vitae. Nam et justo facilisis, semper erat sed, pulvinar ligula. Vivamus vel ipsum id nunc mattis rhoncus. In non varius mauris. Nunc efficitur imperdiet quam sit amet tincidunt. Curabitur et sapien elit. Donec sit amet interdum mi. Nam eu elit ut libero facilisis elementum eget ac arcu.</p>
    </section>
    <hr>
    <section class="container py-5">
        <div class="d-flex">
            <div class="avatar"><img src="images/profile-img-default.png" class="rounded-circle" alt=""></div>
            <div class="pl-3 d-flex flex-column justify-content-center">
                <p class="text-success m-0">Posted by</p>
                <p class="text-muted m-0">adminuser</p>
                <p class="text-success m-0">September 11, 2017 <span class="text-muted">in</span> <a class="text-success" href="#">Uncategorized</a></p>
            </div>
        </div>
    </section>
    <hr>
    <section class="container py-5">
        <form class="mb-3">
            <div class="form-group">
                <textarea class="form-control bg-light" rows="3" placeholder="Enter your comment here..."></textarea>
            </div>
            <div class="form-group">
                <label for="#name">Name <sup>*</sup></label>
                <input type="text" id="name" class="form-control bg-light" required>
            </div>
            <div class="form-group">
                <label for="#name">Email <sup>*</sup></label>
                <input type="email" id="name" class="form-control bg-light" required>
            </div>
            <div class="form-group">
                <label for="#name">Website</label>
                <input type="text" id="name" class="form-control bg-light">
            </div>
            <button type="submit" class="btn btn-success">Post Comment</button>
        </form>
    </section>
</main>
<?php include "footer.php";?>