<?php
include "koneksi.php";

$keyword = $_POST['keyword'];
$sql = "SELECT * FROM article WHERE judul LIKE ? OR isi LIKE ? ORDER BY tanggal DESC";

$stmt = $conn->prepare($sql);
$search = "%" . $keyword . "%";
$stmt->bind_param("ss", $search, $search);
$stmt->execute();
$hasil = $stmt->get_result();
$no = 1;

while ($row = $hasil->fetch_assoc()) {
?>
    <tr>
        <td><?= $no++ ?></td>
        <td><strong><?= $row["judul"] ?></strong><br><small>pada: <?= $row["tanggal"] ?></small></td>
        <td><?= $row["isi"] ?></td>
        <td>
            <?php if ($row["gambar"] != '' && file_exists('img/' . $row["gambar"])) {
                echo '<img src="img/' . $row["gambar"] . '" class="img-fluid" width="100">';
            } ?>
        </td>
        <td>
            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row["id"] ?>">
                <i class="bi bi-trash"></i>
            </button>

            <div class="modal fade" id="modalHapus<?= $row["id"] ?>" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="post">
                            <div class="modal-body text-dark">
                                Yakin hapus "<strong><?= $row["judul"] ?></strong>"?
                                <input type="hidden" name="id" value="<?= $row["id"] ?>">
                                <input type="hidden" name="gambar" value="<?= $row["gambar"] ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <input type="submit" name="hapus" value="Hapus" class="btn btn-danger">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </td>
    </tr>
<?php } ?>