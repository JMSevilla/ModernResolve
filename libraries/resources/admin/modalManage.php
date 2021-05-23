<el-dialog
  title="Manage"
  :visible.sync="centerDialogvisible"
  :before-close="handleClose">
    <?php include("libraries/resources/admin/manageTab.php"); ?>
</el-dialog>