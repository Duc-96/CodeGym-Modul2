<?php include_once FILE_CHUA . '/view/admin_layout/header.php'; ?>
<div id="layoutSidenav">
  <?php include_once FILE_CHUA . '/view/admin_layout/menu.php'; ?>
  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item"><a href="index.php?controller=admin">Trang Chủ</a></li>
          <li class="breadcrumb-item active"><a href='index.php?controller=product&action=list&page=1'>Quản lý sản phẩm</a></li>
          <li class="breadcrumb-item active">Xóa</li>
        </ol>

        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            DataTable Example
          </div>
          <div class="card-body">
            <!-- Giao diện ở giữa -->
            <h1>Bạn có chắn muốn xóa sản phẩm này?</h1>
            <h3 class='ten'><?php echo $idProduct['tensanpham']; ?></h3>
            <form action="./index.php?controller=product&action=delete" method="post">
              <input type="hidden" name="id" value="<?php echo $idProduct['id']; ?>" />
              <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-danger" />
                <a class="btn btn-primary" href="./index.php?controller=product&action=list&page=" .$soPage>Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>
<?php include_once FILE_CHUA . '/view/admin_layout/footer.php'; ?>