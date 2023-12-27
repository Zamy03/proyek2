<?= $this->extend('layout_admin/template'); ?>
<?= $this->section('content'); ?>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Stock Out</h1>

                    <div class="card mb-4">
                        <div class="card-header">
                            <!-- To Open Modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                Add Items
                            </button>
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                        <th>Code Goods</th>
                                        <th>Name of Items</th>
                                        <th>Description</th>
                                        <th>Size</th>
                                        <th>Color</th>
                                        <th>Amount</th>
                                        <th>Recipient</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
<?= $this->include('barang_keluar/modal_insert'); ?>

<?= $this->endSection(); ?>