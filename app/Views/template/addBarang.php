        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <!-- Lakukan Perulangan Pada Card Barang -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="barang_tittle">Nama Barang :</label>
                            <input type="text" class="form-control" id="barang_tittle" name="barang_title">
                        </div>
                        <div class="form-group">
                            <label for="barang_description">Deskripsi Barang :</label>
                            <input type="text" class="form-control" id="barang_description" name="barang_description">
                        </div>
                        <div class="form-group">
                            <label for="barang_harga">Harga Barang :</label>
                            <input type="text" class="form-control" id="barang_harga" name="barang_harga">
                        </div>
                        <div class="form-group">
                            <label for="barang_img">Foto Barang :</label>
                            <input type="file" class="form-control" id="barang_img" name="barang_img">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control" value="submit" name="submit">
                        </div>
                        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                    </form>
                    
                </div>
            </div>
        </section>