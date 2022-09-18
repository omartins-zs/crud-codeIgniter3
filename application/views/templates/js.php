<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!-- Alertify.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.min.js" integrity="sha512-JnjG+Wt53GspUQXQhc+c4j8SBERsgJAoHeehagKHlxQN+MtCCmFDghX9/AcbkkNRZptyZU4zC8utK59M5L45Iw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><!-- Alertify Notifier JS -->

<script type="text/javascript">
    $(document).ready(function() {
        <?php if ($this->session->flashdata("success")) { ?>
            alertify.set('notifier', 'position', 'top-center');
            alertify.success("<?= $this->session->flashdata("success") ?>");
        <?php } ?>
        <?php if ($this->session->flashdata("danger")) { ?>
            alertify.set('notifier', 'position', 'top-center');
            alertify.error("<?= $this->session->flashdata("danger") ?>");
        <?php } ?>
    })
</script>

</body>

</html>