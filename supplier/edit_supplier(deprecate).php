<?php
include "../headers/mgtheader.php";
require_once '../model/supplierDAO.php';

$supplierModel = new SupplierDAO();
$result = $supplierModel->getSupplierById($_GET['id']);
foreach ($result as $row) {
    $supplier = $row;
} ?>

<div class="container mt-4">
    <h2>Edit Supplier</h2>
    <form action="supplier.php?action=update&id=<?= $supplier['supp_id'] ?>" method="POST">
        <div class="form-group">
            <label for="company">Company:</label>
            <input type="text" class="form-control" id="company" name="company" value="<?= $supplier['company'] ?>"
                required>
        </div>
        <div class="form-group">
            <label for="contact_person">Contact Person:</label>
            <input type="text" class="form-control" id="contact_person" name="contact_person"
                value="<?= $supplier['contact_person'] ?>" required>
        </div>
        <div class="form-group">
            <label for="sex">Sex:</label>
            <select class="form-control" id="sex" name="sex" required>
                <option value="Male" <?php if ($supplier['sex'] === 'Male')
                    echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($supplier['sex'] === 'Female')
                    echo 'selected'; ?>>Female</option>
                <option value="Non-binary" <?php if ($supplier['sex'] === 'Non-binary')
                    echo 'selected'; ?>>Non-binary
                </option>
            </select>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $supplier['phone'] ?>" required>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="<?= $supplier['address'] ?>"
                required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<?php include "../footers/footer.php"; ?>