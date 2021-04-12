<?php $this->title = "knowledgePost creation"; ?>
<?php var_dump('hello'); ?>
<section>
    <div>
        <h4 class="modal-title w-100 font-weight-bold white-text">Ecris ton article</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
        </button>
    </div>
    <div class="modal-body mx-3">
        <form action="post&status=new" method="post">
            <div class="md-form mb-5">
                <input type="text" name="know_title" id="defaultForm-email" class="form-control validate" required>
                <label data-error="" data-success="" for="defaultForm-text">Titre</label>
            </div>
            <div class="md-form mb-4">
                <i class="fas fa-lock prefix white-text"></i>
                <textarea type="text" name="know_content" id="defaultForm-pass" class="form-control validate" required>
                        <label data-error="" data-success="" for="defaultForm-pass">Ton article</label>
                    </div><br>
                    <div class="modal-footer d-flex justify-content-center"><br>
                        <button type="submit" class="btn btn-outline-white wow fadeInDown">Publier</button>
                    </div>
                </form>
            </div>
</section>
