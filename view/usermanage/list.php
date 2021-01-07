<?php include FILE_CHUA . '/view/admin_layout/header.php'; ?>
<div id="layoutSidenav">
    <?php include FILE_CHUA . '/view/admin_layout/menu.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Người dùng</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php?controller=admin">Trang Chủ</a></li>
                    <li class="breadcrumb-item active">Quản lý người dùng</li>
                </ol>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Danh sách người dùng
                    </div>
                     
                    <div class="card-body">
                        <div class="form-group">
                            <a href="index.php?controller=user&action=add" class='btn btn-primary'>Thêm người dùng</a>
                        </div>
                    <div>
                        <div class="card-body">
                        <div class="form-group">
                            <form class="form-inline"action="" method="get">
                            <input type="hidden" name="controller" value='user'>
                            <input type="hidden" name="action" value='timkiem'>

                                <div class="form-group">
                                    <input type="text" name="tukhoa" placeholder="Nhập tên người dùng" class="form-control" >
                                </div>
                                <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
                            </form>
                        </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên Đăng Nhập</th>
                                            <!-- <th>Password</th> -->
                                            <th>Họ Tên</th>
                                            <th>Số điện thoại</th>
                                            <th>Email</th>
                                            <th>Ngày Sinh</th>
                                            <th>Thao Tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($user as $key => $value) : ?>
                                            <tr>
                                                <td><?php echo $value['id']; ?></td>
                                                <td><?php echo $value['username']; ?></td>
                                                <!-- <td><?php echo $value['password']; ?></td> -->
                                                <td><?php echo $value['fullname']; ?></td>
                                                <td><?php echo $value['phone']; ?></td>
                                                <td><?php echo $value['email']; ?></td>
                                                <td><?php echo $value['birthday']; ?></td>
                                                <td>
                                                    <a href="./index.php?controller=user&action=delete&id=<?php echo $value['id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                    <a href="./index.php?controller=user&action=update&id=<?php echo $value['id']; ?>" class="btn btn-outline-success">Update</a>
                                                </td>
                                            <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php include_once FILE_CHUA . '/view/usermanage/totalPage.php' ?>
                        </div>
                    </div>
                </div>
        </main>
    </div>
</div>

<?php include FILE_CHUA . '/view/admin_layout/footer.php'; ?>