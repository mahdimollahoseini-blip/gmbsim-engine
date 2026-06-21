<?php

if (!defined('ABSPATH')) {
    exit;
}

function gmbsim_default_products()
{
    return array(

        array(
            'title'            => 'دائمی پایه',
            'product_id'       => 314,
            'channel'          => 'eShop',
            'fixed_profit'     => 50000,
            'percent_profit'   => 0,
            'active'           => 1
        )

    );
}

function gmbsim_products_page()
{
?>
<div class="wrap">

    <h1>دسته‌بندی محصولات ایرانسل</h1>

    <table class="widefat striped">

        <thead>

        <tr>

            <th>نام</th>
            <th>Product ID</th>
            <th>Channel</th>
            <th>سود ثابت</th>
            <th>سود درصدی</th>

        </tr>

        </thead>

        <tbody>

        <?php foreach (gmbsim_default_products() as $product) : ?>

            <tr>

                <td><?php echo esc_html($product['title']); ?></td>

                <td><?php echo esc_html($product['product_id']); ?></td>

                <td><?php echo esc_html($product['channel']); ?></td>

                <td><?php echo esc_html($product['fixed_profit']); ?></td>

                <td><?php echo esc_html($product['percent_profit']); ?></td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>
<?php
}