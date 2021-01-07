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
                        <form method="post" action="index.php?controller=user&action=add">
                            <div class="form-group">
                                <label>Tên đăng nhập</label>
                                <input type="text" class="form-control" name="username" placeholder="Nhập tên" required>
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label>Tên đầy đủ</label>
                                <input type="text" class="form-control" name="fullname" placeholder="Nhập họ và tên" required>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" class="form-control" name="phone" placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input type="text" class="form-control" name="birthday" placeholder="Nhập ngày sinh" required>

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