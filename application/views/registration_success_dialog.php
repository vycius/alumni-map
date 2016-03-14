<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="modal fade" tabindex="-1" role="dialog" id="registration-succes-dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Uždaryti"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Sėkmingai užsiregistravote</h4>
            </div>
            <div class="modal-body">
                <p>O dabar nieko nelauk ir pakviesk prisijungti kitus Alumnus!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    $("#registration-succes-dialog").modal('show');
</script>

