<?php
    if(is_array($tl)){
        extract($tl);
    }
?>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">THÊM MỚI THỂ LOẠI PHIM</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Thể loại</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="index.php?act=update_theloai" method="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group m-t-20">
                                    <label for="hue-demo">Mã thể loại</label>
                                    <input type="text" id="maloai" class="form-control demo" name="maloai"value="<?php if(isset($id)&&($id!="")) echo $id; ?>" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="hue-demo">Tên loại</label>
                                        <input type="text"  class="form-control demo" name="tenloai" value="<?php if(isset($nametl)&&($nametl!="")) echo $nametl; ?>">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                            <input type="submit"  class="btn btn-success" name="capnhat" value="Cập nhật">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            <a href="index.php?act=list_theloai"><button type="" class="btn btn-info">Danh sách</button></a>
                        </form>
                    </div>
                </div>

            </div>
