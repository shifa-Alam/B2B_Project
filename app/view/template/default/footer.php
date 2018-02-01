<footer class="footer text-right">
    <?php echo "© Giribaz ".date('Y');?>
</footer>

</div>


<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


<!-- Right Sidebar -->
<div class="side-bar right-bar">
<a href="javascript:void(0);" class="right-bar-toggle">
    <i class="mdi mdi-close-circle-outline"></i>
</a>
<h4 class="">Settings</h4>
<div class="setting-list nicescroll">
    <div class="row m-t-20">
        <div class="col-xs-8">
            <h5 class="m-0">Notifications</h5>
            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
        </div>
        <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-xs-8">
            <h5 class="m-0">API Access</h5>
            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
        </div>
        <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-xs-8">
            <h5 class="m-0">Auto Updates</h5>
            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
        </div>
        <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
        </div>
    </div>

    <div class="row m-t-20">
        <div class="col-xs-8">
            <h5 class="m-0">Online Status</h5>
            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
        </div>
        <div class="col-xs-4 text-right">
            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
        </div>
    </div>
</div>
</div>
<!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php template_url('assets/js/jquery.min.js');?>"></script>
<script src="<?php template_url('assets/js/bootstrap.min.js');?>"></script>
<script src="<?php template_url('assets/js/detect.js');?>"></script>
<script src="<?php template_url('assets/js/fastclick.js');?>"></script>
<script src="<?php template_url('assets/js/jquery.blockUI.js');?>"></script>
<script src="<?php template_url('assets/js/waves.js');?>"></script>
<script src="<?php template_url('assets/js/jquery.slimscroll.js');?>"></script>
<script src="<?php template_url('assets/js/jquery.scrollTo.min.js');?>"></script>
<script src="<?php template_url('plugins/switchery/switchery.min.js');?>"></script>

<!-- Counter js  -->
<script src="<?php template_url('plugins/waypoints/jquery.waypoints.min.js');?>"></script>
<script src="<?php template_url('plugins/counterup/jquery.counterup.min.js');?>"></script>

<!--Morris Chart-->
<script src="<?php template_url('plugins/morris/morris.min.js');?>"></script>
<script src="<?php template_url('plugins/raphael/raphael-min.js');?>"></script>

<!-- Dashboard init -->
<script src="<?php template_url('assets/pages/jquery.dashboard.js');?>"></script>

<!-- App js -->
<script src="<?php template_url('assets/js/jquery.core.js');?>"></script>
<script src="<?php template_url('assets/js/jquery.app.js');?>"></script>

<!-- Notification  -->
<script src="<?php template_url('plugins/toastr/toastr.min.js');?>"></script>

<!-- Script  -->
<script src="<?php template_url('assets/js/script.js');?>"></script>

<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            <?php foreach($MESSAGE as $message): ?>
            toastr.<?php echo $message['type'];?>('<?php echo $message['message'];?>', 'Notification');
            <?php endforeach;?>
        })
    })(jQuery);
</script>

</body>
</html>
