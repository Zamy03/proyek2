<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Stock In</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post">
                <div class="modal-body">

                    <select name="barangnya" class="form-control">
                    
                    </select>
                    <br>
                    <input type="text" name="penerima" class="form-control" placeholder="Penerima" required>
                    <br>
                    <input type="number" name="qty" class="form-control" placeholder="Quantity" required>
                    <br>
                    <button type="submit" class="btn btn-primary" name="barangmasuk">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>