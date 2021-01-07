<?php include_once FILE_CHUA . '/view/admin_layout/header.php'; ?>
<div id="layoutSidenav">
    <?php include_once FILE_CHUA . '/view/admin_layout/menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Người Dùng</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php?controller=admin">Trang chủ</a></li>
                    <li class="breadcrumb-item active"><a href='index.php?controller=product&action=list&page=1'>Quản lý người dùng</a></li>
                    <li class="breadcrumb-item active">Cập Nhật</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <form method="post" action="./index.php?controller=user&action=update">
                            <input type="hidden" name="id" value="<?php echo $idUser['id']; ?>" />
                            <div class="form-group">
                                <label>Tên Đăng Nhập</label>
                                <input type="text" name="username" value="<?php echo $idUser['username']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?php echo $idUser['password']; ?>" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Tên Đầy Đủ</label>
                                <textarea name="fullname" class="form-control"><?php echo $idUser['fullname']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <textarea name="phone" class="form-control"><?php echo $idUser['phone']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <textarea name="email" class="form-control"><?php echo $idUser['email']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh</label>
                                <textarea name="birthday" class="form-control"><?php echo $idUser['birthday']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Update" class="btn btn-primary" />
                                <a href="./index.php?controller=user&action=list&page=1" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<?php include_once FILE_CHUA . '/view/admin_layout/footer.php'; ?>