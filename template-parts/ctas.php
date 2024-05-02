<div class="subscription">
    <h5><?php echo $args['heading'];?></h5>
    <div class="row">
        <div class="col-12 col-lg-7">
            <p><?php echo $args['description'];?></p>
        </div>
        <div class="col-12 col-lg-5">
            <form class="news-letter d-flex" method="post">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" required >
                <button type="submit"><?php echo $args['button-text'];?></button>
                <input type="hidden" name="action" value="my_contact" />
            </form>
        </div>
    </div>
</div>
<!-- class="btn bg-primary p-3 border-0 rounded-end rounded-4 text-white" -->