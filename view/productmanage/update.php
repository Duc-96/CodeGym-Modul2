<?php include_once FILE_CHUA . '/view/admin_layout/header.php'; ?>
<div id="layoutSidenav">
    <?php include_once FILE_CHUA . '/view/admin_layout/menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php?controller=admin">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href='index.php?controller=product&action=list&page=1'>Quản lý sản phẩm</a></li>
                    <li class="breadcrumb-item active">Cập Nhật</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <form method="post" action="./index.php?controller=product&action=update">
                            <input type="hidden" name="id" value="<?php echo $idProduct['id']; ?>" />
                            <div class="form-group">
                                <label>Tên Sản Phẩm</label>
                                <input type="text" name="tensanpham" value="<?php echo $idProduct['tensanpham']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Ngày Nhập</label>
                                <input type="text" name="ngaynhap" value="<?php echo $idProduct['ngaynhap']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Giá Bán</label>
                                <textarea name="giaban" class="form-control"><?php echo $idProduct['giaban']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-primary" />
                                <a href="./index.php?controller=product&action=list&page=1" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include_once FILE_CHUA . '/view/admin_layout/footer.php'; ?>