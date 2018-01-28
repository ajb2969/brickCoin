<?php
/**
footer.php
*/
$script = base_url('js/test.js');
$script2 = base_url('js/jquery-3.2.1.min.js');
$script3 = base_url('js/popper.min.js');
$script4 = base_url('js/bootstrap.min.js');
$script5 = base_url('js/mdb.min.js');
?>

<div id="loaderWheel" class="loader" style="display: none;"></div>


        <div class="modal fade right" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
            data-backdrop="false">
            <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-danger" role="document">
                <!--Content-->
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading">Check again...</p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">&times;</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-3">
                                <p></p>
                                <p class="text-center">
                                    <i class="fa fa-shopping-cart fa-4x"></i>
                                </p>
                            </div>

                            <div class="col-9">
                                <p>Please check the following, something seems off:</p>
                                <h2>
                                    <span class="badge" id="errors"></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>




</body>

<!-- SCRIPTS -->
<script src="<?=$script2?>"></script>
<script src="<?=$script3?>"></script>
<script src="<?=$script4?>"></script>
<script src="<?=$script5?>"></script>
<script src="<?=$script?>"></script>

</html>