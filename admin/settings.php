<?php

if (!defined('ABSPATH')) {
    exit;
}

function gmbsim_settings_page()
{
?>
<div class="wrap">

    <h1>تنظیمات افزونه GMBSIM</h1>

    <form method="post" action="options.php">

        <?php
        settings_fields('gmbsim_group');
        ?>

        <table class="form-table">

            <tr>
                <th>Product ID</th>
                <td>
                    <input type="number"
                           name="gmbsim_product_id"
                           value="<?php echo esc_attr(get_option('gmbsim_product_id',314)); ?>"
                           class="regular-text">
                </td>
            </tr>

            <tr>
                <th>Channel</th>
                <td>
                    <input type="text"
                           name="gmbsim_channel"
                           value="<?php echo esc_attr(get_option('gmbsim_channel','eShop')); ?>"
                           class="regular-text">
                </td>
            </tr>

            <tr>
                <th>قیمت پایه</th>
                <td>
                    <input type="number"
                           name="gmbsim_base_price"
                           value="<?php echo esc_attr(get_option('gmbsim_base_price',0)); ?>"
                           class="regular-text">
                </td>
            </tr>

            <tr>
                <th>سود ثابت</th>
                <td>
                    <input type="number"
                           name="gmbsim_fixed_profit"
                           value="<?php echo esc_attr(get_option('gmbsim_fixed_profit',0)); ?>"
                           class="regular-text">
                </td>
            </tr>

            <tr>
                <th>سود درصدی</th>
                <td>
                    <input type="number"
                           name="gmbsim_percent_profit"
                           value="<?php echo esc_attr(get_option('gmbsim_percent_profit',0)); ?>"
                           class="regular-text">
                </td>
            </tr>

        </table>

        <?php submit_button('ذخیره تنظیمات'); ?>

    </form>

</div>
<?php
}