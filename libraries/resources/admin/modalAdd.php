<el-dialog 
  title="Create Account"
  :visible.sync="dialogVisible"
  :before-close="handleClose">
    <?php include("libraries/resources/admin/addTab.php"); ?>
</el-dialog>