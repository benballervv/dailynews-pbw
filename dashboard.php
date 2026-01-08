<?php

$sql = "SELECT * FROM article";
$query = mysqli_query($conn, $sql);

$jumlah_article = ($query) ? mysqli_num_rows($query) : 0;
?>

<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">
    <div class="col">
        <div class="card border border-primary mb-3 shadow-sm" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3 text-primary">
                        <h5 class="card-title"><i class="bi bi-newspaper"></i> Article</h5> 
                    </div>
                    <div class="p-3 text-center">
                        <span class="badge rounded-pill text-bg-primary fs-2"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    
    <div class="col">
        <div class="card border border-primary mb-3 shadow-sm" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3 text-primary">
                        <h5 class="card-title"><i class="bi bi-camera"></i> Gallery</h5> 
                    </div>
                    <div class="p-3 text-center">
                        <span class="badge rounded-pill text-bg-primary fs-2">0</span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>