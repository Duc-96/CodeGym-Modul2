<?php include_once FILE_CHUA . '/view/admin_layout/header.php'; ?>
<div id="layoutSidenav">
    <?php include_once FILE_CHUA . '/view/admin_layout/menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Tables</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tables</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <!-- Giao diện ở giữa -->
                        <form method="post" action="index.php?controller=product&action=add">
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="tensanpham" placeholder="Nhập tên sản phẩm" required>
                            </div>
                            <div class="form-group">
                                <label>Ngày Nhập Kho</label>
                                <input type="text" class="form-control" name="ngaynhap" placeholder="Ngày Nhập" required>
                            </div>
                            <div class="form-group">
                                <label>Giá Sản Phẩm</label>
                                <input type="text" class="form-control" name="giaban" placeholder="Nhập giá bán" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include_once FILE_CHUA . '/view/admin_layout/footer.php'; ?>