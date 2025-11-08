<div class="container-fluid px-4">
    <h1 class="mt-4">User</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?php echo site_url('user') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
        </div>

        <div class="card-body">
            <div class="card mb-4">
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('report/kustomerlap') ?>" target="_blank">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Internal file Controller : Menyertakan report pada file controller
                            </label>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('report/headerlap') ?>" target="_blank">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Internal file Controller : Menyertakan report hanya header pada file controller
                            </label>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('report/kustomerfulllap') ?>" target="_blank">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Eksternal file Controller : Menyertakan report pada file berbeda dan diletakan di folder view
                            </label>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('report/kustomerkustom') ?>" target="_blank">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Custom Eksternal file Controller : Menyertakan report pada file berbeda dan diletakan di folder view berdasarkan fungsi
                            </label>
                            <button type="submit" class="btn btn-warning">Cetak Laporan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
