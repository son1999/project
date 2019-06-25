<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" style="background: linear-gradient(-135deg, #c850c0, #4158d0);" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin/">
        <div class="sidebar-brand-icon rotate-n-15">
            
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup>
        </div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="admin/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Trang Chủ</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-clipboard-list"></i>
            <span>Category</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: linear-gradient(to right, #4b134f, #c94b4b);">
                <h6 class="collapse-header text-light font-italic">Danh Mục Loại Sản Phẩm</h6>
                <a class="collapse-item text-light" href="{{ route('category.index') }}">Danh Sách</a>
                <a class="collapse-item text-light" href="{{ route('category.create') }}">Thêm Mới</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#producttype" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-store-alt"></i>
            <span>Producttype</span>
        </a>
        <div id="producttype" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: linear-gradient(to right, #4b134f, #c94b4b);">
                <h6 class="collapse-header text-light font-italic">Danh Mục Sản Phẩm</h6>
                <a class="collapse-item text-light" href="{{ route('producttype.index') }}">Danh Sách</a>
                <a class="collapse-item text-light" href="{{ route('producttype.create') }}">Thêm Mới</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-store-alt"></i>
            <span>Product</span>
        </a>
        <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded" style="background: linear-gradient(to right, #4b134f, #c94b4b);">
                <h6 class="collapse-header text-light font-italic">Quản lý Sản Phẩm</h6>
                <a class="collapse-item text-light" href="{{ route('product.index') }}">Danh Sách</a>
                <a class="collapse-item text-light" href="{{ route('product.create') }}">Thêm Mới</a>
            </div>
        </div>
    </li>
</ul>