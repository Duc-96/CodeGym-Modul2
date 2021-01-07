<?php include_once FILE_CHUA . '/view/admin_layout/header.php'; ?>
<div id="layoutSidenav">
  <?php include_once FILE_CHUA . '/view/admin_layout/menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h1 class="mt-4">Người dùng</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php?controller=admin">Trang Chủ</a></li>
          <li class="breadcrumb-item active"><a href='index.php?controller=user&action=list&page=1'>Quản lý người dùng</a></li>
          <li class="breadcrumb-item active">Xóa</li>
        </ol>

        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
          </div>
          <div class="card-body">
            <!-- Giao diện ở giữa -->
            <h1>Bạn có chắn muốn xóa tài khoản này?</h1>
            <h3 class='ten'><?php echo $user['username']; ?></h3>
            <form action="./index.php?controller=user&action=delete" method="post">
              <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
              <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-danger" />
                <a class="btn btn-primary" href="./index.php?controller=user&action=list&page=1">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include_once FILE_CHUA . '/view/admin_layout/footer.php'; ?>