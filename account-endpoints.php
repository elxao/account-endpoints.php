<?php
/**
 * Plugin Name: ELXAO – Account Styles (Beige Palette)
 * Description: Adds beige palette styling to WooCommerce account pages
 * Author: ELXAO
 */
if ( ! defined('ABSPATH') ) exit;

// Add styles to WooCommerce account pages
add_action('wp_head', function() {
    if ( ! is_account_page() ) return;
    ?>
    <style>
/* ELXAO Account Styles - Beige Palette */

/* Tables - Reset and Base Styles */
.woocommerce-account table.shop_table,
.woocommerce table.my_account_orders,
.woocommerce table.my_account_subscriptions,
.woocommerce-MyAccount-content table.shop_table {
    width: 100% !important;
    border-collapse: separate !important;
    border-spacing: 0 !important;
    border: 1px solid #E8E6DC !important;
    border-radius: 8px !important;
    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.06) !important;
    background: #ffffff !important;
    overflow: hidden !important;
}

/* Table Header */
.woocommerce-account table.shop_table thead,
.woocommerce table.my_account_orders thead,
.woocommerce table.my_account_subscriptions thead {
    background: #F0EEE6 !important;
}

.woocommerce-account table.shop_table thead th,
.woocommerce table.my_account_orders thead th,
.woocommerce table.my_account_subscriptions thead th {
    background: #F0EEE6 !important;
    color: #141413 !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    padding: 16px !important;
    border: none !important;
    border-bottom: 1px solid #E8E6DC !important;
    border-right: 1px solid #E8E6DC !important; /* column dividers */
    text-align: left !important;
}

.woocommerce-account table.shop_table thead th:last-child,
.woocommerce table.my_account_orders thead th:last-child,
.woocommerce table.my_account_subscriptions thead th:last-child {
    border-right: none !important;
}

/* Table Body Rows */
.woocommerce-account table.shop_table tbody tr,
.woocommerce table.my_account_orders tbody tr,
.woocommerce table.my_account_subscriptions tbody tr {
    background: #ffffff !important;
    border-bottom: 1px solid #E8E6DC !important;
    transition: background-color 0.2s ease !important;
}

.woocommerce-account table.shop_table tbody tr:last-child,
.woocommerce table.my_account_orders tbody tr:last-child,
.woocommerce table.my_account_subscriptions tbody tr:last-child {
    border-bottom: none !important;
}

.woocommerce-account table.shop_table tbody tr:hover,
.woocommerce table.my_account_orders tbody tr:hover,
.woocommerce table.my_account_subscriptions tbody tr:hover {
    background: #FAF9F5 !important;
}

/* Table Cells */
.woocommerce-account table.shop_table td,
.woocommerce table.my_account_orders td,
.woocommerce table.my_account_subscriptions td {
    padding: 16px !important;
    color: #141413 !important;
    font-size: 14px !important;
    border: none !important;
    border-right: 1px solid #E8E6DC !important;
    vertical-align: middle !important;
    text-align: left !important;
    line-height: 1.5 !important;
}

.woocommerce-account table.shop_table td:last-child,
.woocommerce table.my_account_orders td:last-child,
.woocommerce table.my_account_subscriptions td:last-child {
    border-right: none !important;
}

/* Status column - header width & alignment */
.woocommerce-account table.shop_table thead th.subscription-status,
.woocommerce-account table.shop_table thead th.order-status,
.woocommerce table.my_account_subscriptions thead th.subscription-status,
.woocommerce table.my_account_subscriptions thead th.order-status,
body .woocommerce-account table thead th.subscription-status,
body .woocommerce table thead th.subscription-status {
    text-align: left !important;
    width: 15% !important;
    min-width: 120px !important;
    position: relative !important;
}

/* Status column cells - NO flex so borders stay full height */
.woocommerce-account table.shop_table td.subscription-status,
.woocommerce-account table.shop_table td.order-status,
.woocommerce table.my_account_subscriptions td.subscription-status,
.woocommerce table.my_account_subscriptions td.order-status,
body .woocommerce-account table tbody tr td.subscription-status,
body .woocommerce table tbody tr td.subscription-status {
    text-align: left !important;
    width: 15% !important;
    min-width: 120px !important;
    padding: 16px !important;
    vertical-align: middle !important;
    white-space: nowrap !important;
    position: relative !important;
}

/* Reinforce inner divider so the right border remains continuous */
.woocommerce-account table.shop_table thead th.subscription-status::after,
.woocommerce-account table.shop_table thead th.order-status::after,
.woocommerce table.my_account_subscriptions thead th.subscription-status::after,
.woocommerce table.my_account_subscriptions thead th.order-status::after,
body .woocommerce-account table thead th.subscription-status::after,
body .woocommerce table thead th.subscription-status::after,
.woocommerce-account table.shop_table td.subscription-status::after,
.woocommerce-account table.shop_table td.order-status::after,
.woocommerce table.my_account_subscriptions td.subscription-status::after,
.woocommerce table.my_account_subscriptions td.order-status::after,
body .woocommerce-account table tbody tr td.subscription-status::after,
body .woocommerce table tbody tr td.subscription-status::after {
    content: "" !important;
    position: absolute !important;
    top: 0 !important;
    right: -1px !important;
    bottom: 0 !important;
    width: 1px !important;
    background: #E8E6DC !important;
}

/* Next payment column - force left alignment */
.woocommerce-account table.shop_table td.subscription-next-payment,
.woocommerce table.my_account_subscriptions td.subscription-next-payment,
body .woocommerce-account table tbody tr td.subscription-next-payment,
body .woocommerce table tbody tr td.subscription-next-payment {
    text-align: left !important;
}

/* Small text (payment method, etc.) */
.woocommerce-account table.shop_table small,
.woocommerce table.my_account_subscriptions small {
    color: #64748b !important;
    font-size: 12px !important;
    display: block !important;
    margin-top: 4px !important;
}

/* Status - plain neutral text */
.woocommerce-account .order-status,
.woocommerce-account .subscription-status,
.woocommerce-account mark,
.woocommerce-account table td mark,
.woocommerce table td mark,
body .woocommerce-account mark,
body .woocommerce mark {
    padding: 0 !important;
    margin: 0 !important;
    border-radius: 0 !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    display: inline-flex !important;
    align-items: center !important;
    background: transparent !important;
    background-color: transparent !important;
    color: #141413 !important;
    border: none !important;
    text-align: left !important;
    line-height: 1.4 !important;
    vertical-align: middle !important;
}

/* Force cells to have white background */
body .woocommerce-account table tbody tr td,
body .woocommerce table tbody tr td,
body table.shop_table tbody tr td,
body table.my_account_subscriptions tbody tr td {
    background: #ffffff !important;
    background-color: #ffffff !important;
}

/* Maintain hover state */
body .woocommerce-account table tbody tr:hover td,
body .woocommerce table tbody tr:hover td {
    background: #FAF9F5 !important;
    background-color: #FAF9F5 !important;
}

/* Buttons */
.woocommerce-account .button,
.woocommerce-account button[type="submit"],
.woocommerce-account .woocommerce-Button {
    background: #141413 !important;
    color: #FAF9F5 !important;
    border: none !important;
    border-radius: 6px !important;
    padding: 12px 24px !important;
    font-size: 14px !important;
    font-weight: 500 !important;
    cursor: pointer !important;
    transition: opacity 0.2s ease !important;
}

.woocommerce-account .button:hover,
.woocommerce-account button[type="submit"]:hover {
    opacity: 0.9 !important;
}

/* Form Inputs */
.woocommerce-account input[type="text"],
.woocommerce-account input[type="email"],
.woocommerce-account input[type="tel"],
.woocommerce-account input[type="password"],
.woocommerce-account select,
.woocommerce-account textarea {
    width: 100% !important;
    padding: 10px 12px !important;
    border: 1px solid #E8E6DC !important;
    border-radius: 6px !important;
    background: #ffffff !important;
    font-size: 14px !important;
    color: #141413 !important;
    transition: border-color 0.2s ease !important;
}

.woocommerce-account input:focus,
.woocommerce-account select:focus,
.woocommerce-account textarea:focus {
    border-color: #141413 !important;
    outline: none !important;
    box-shadow: 0 0 0 3px rgba(20, 20, 19, 0.1) !important;
}

/* Form containers */
.woocommerce-account .woocommerce-address-fields,
.woocommerce-account .woocommerce-EditAccountForm {
    background: #ffffff !important;
    padding: 24px !important;
    border: 1px solid #E8E6DC !important;
    border-radius: 8px !important;
    box-shadow: 0 1px 3px 0 rgba(0,0,0,0.06) !important;
}
    </style>
    <?php
});
