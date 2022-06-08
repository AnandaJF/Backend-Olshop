    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-barang -->
                    <li class="menu-title">Barang</li>
                    <li class="">
                        <a href="{{ route('products.index') }}">
                        <i class="menu-icon fa fa-list"></i>Lihat Barang</a>
                    </li>
                    <li class="">
                        <a href="{{ route('products.create') }}">
                        <i class="menu-icon fa fa-plus"></i>Tambah Barang</a>
                    </li>

                    <!-- /.menu-foto barang -->
                    <li class="menu-title">Foto Barang</li>
                    <li class="">
                        <a href="{{ route('product-galleries.index') }}">
                        <i class="menu-icon fa fa-list"></i>Lihat Foto Barang</a>
                    </li>
                    <li class="">
                        <a href="{{ route('product-galleries.create') }}">
                        <i class="menu-icon fa fa-plus"></i>Tambah Foto Barang</a>
                    </li>

                    <!-- /.menu-Transaksi -->
                    <li class="menu-title">Transaksi</li>
                        <li class="">
                            <a href="{{ route('transaction.index') }}">
                            <i class="menu-icon fa fa-list"></i>
                            Lihat Transaksi</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->