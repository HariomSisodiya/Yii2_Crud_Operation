<?php

use yii\helpers\Html;
/** @var yii\web\View $this */
/** @var app\models\Products[] $products */

$this->title = 'CRUD using Yii';
?>

<div class="container">
    <h1 class="text-center text-primary text-decoration-underline">Product Management</h1>
    <div class="mt-5 p-2">
        <?= Html::a('Add Product', ['create'], ['class' => 'btn btn-primary']) ?>
    </div>
    <div class="row mt-5 text-center">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($products) > 0): ?>
                    <?php foreach ($products as $index => $product): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= $product->title ?></td>
                            <td><?= $product->description ?></td>
                            <td><?= $product->price ?></td>
                            <td>
                                <div class="w-70 d-flex justify-content-evenly align-items-center">
                                   <?= Html::a('<i class="fa-solid fa-pen-to-square"></i>', ['update', 'id' => $product->id], ['class' => 'btn btn-outline-success']) ?>
                                   <?= Html::a('<i class="fa-regular fa-eye"></i>', ['view', 'id' => $product->id], ['class' => 'btn btn-outline-primary']) ?>
                                   <?= Html::a('<i class="fa-solid fa-trash-can"></i>', ['delete', 'id' => $product->id], ['class' => 'btn btn-outline-danger', 'data-method' => 'post', 'data-confirm' => 'Are you sure you want to delete this item?']) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No Record found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
