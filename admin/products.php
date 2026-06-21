<?php

if (!defined('ABSPATH')) {
    exit;
}

function gmbsim_products_page()
{
    global $wpdb;

    $table = $wpdb->prefix . 'gmbsim_products';

    $products = $wpdb->get_results(
        "SELECT * FROM {$table} ORDER BY id ASC",
        ARRAY_A
    );

    ?>

    <div class="wrap">

        <h1>دسته‌بندی محصولات ایرانسل</h1>

        <p>
            در نسخه‌های بعدی امکان افزودن، ویرایش و حذف دسته‌ها اضافه خواهد شد.
        </p>

        <table class="widefat striped">

            <thead>

                <tr>

                    <th>ID</th>

                    <th>عنوان</th>

                    <th>Product ID</th>

                    <th>Channel</th>

                    <th>سود ثابت</th>

                    <th>سود درصدی</th>

                    <th>وضعیت</th>

                </tr>

            </thead>

            <tbody>

            <?php if (!empty($products)) : ?>

                <?php foreach ($products as $product) : ?>

                    <tr>

                        <td><?php echo esc_html($product['id']); ?></td>

                        <td><?php echo esc_html($product['title']); ?></td>

                        <td><?php echo esc_html($product['product_id']); ?></td>

                        <td><?php echo esc_html($product['channel']); ?></td>

                        <td><?php echo number_format($product['fixed_profit']); ?></td>

                        <td><?php echo esc_html($product['percent_profit']); ?>%</td>

                        <td>

                            <?php
                            echo $product['active']
                                ? '<span style="color:green;font-weight:bold;">فعال</span>'
                                : '<span style="color:red;font-weight:bold;">غیرفعال</span>';
                            ?>

                        </td>

                    </tr>

                <?php endforeach; ?>

            <?php else : ?>

                <tr>

                    <td colspan="7">

                        هیچ دسته‌ای ثبت نشده است.

                    </td>

                </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

    <?php
}