<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <i class="icon fa fa-check"></i><?= $this->session->$this->session->flashdata('succes'); ?>
    </div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-error alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        <i class="icon fa fa-ban"></i><?= $this->session->$this->session->flashdata('succes'); ?>
    </div>
<?php } ?>