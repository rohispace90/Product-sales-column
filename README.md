# Product Sales Column

**Contributors:** rohispace  
**Donate link:** [https://sarkolearn.com](https://sarkolearn.com)  
**Tags:** woocommerce, sales, admin, products  
**Requires at least:** 5.0  
**Tested up to:** 6.8  
**Requires PHP:** 7.4  
**Stable tag:** 1.0  
**License:** GPLv2 or later  
**License URI:** [GNU GPL v2](https://www.gnu.org/licenses/gpl-2.0.html)  

---

Adds a **"Total Sales"** column to the WooCommerce products list in the WordPress admin area.

---

## 📖 Description
This plugin adds a custom column in the WooCommerce products list to display the number of successful sales (completed orders) for each product.  
It helps shop managers quickly see which products have sold and how many units were purchased without needing to check reports.

---

## ⚙️ Installation
1. Download the plugin as a ZIP (`Code → Download ZIP`) or from the [Releases](../../releases).  
2. In your WordPress admin, go to **Plugins → Add New → Upload Plugin**.  
3. Upload the ZIP file and click **Activate**.  
4. Navigate to **Products → All Products** and see the new column **تعداد فروش موفق**.

---

## ❓ Frequently Asked Questions

### Which orders are counted?
Only orders with status **Completed** are counted as successful sales.

### Does it slow down my admin area?
No. The plugin uses WooCommerce’s built-in function `get_total_sales()` which is very lightweight.

---

## 📸 Screenshots
1. The "تعداد فروش موفق" column visible in the WooCommerce products list.

---

## 🆕 Changelog

### 1.0
* Initial release.

---

## 🔔 Upgrade Notice

### 1.0
First release of the plugin. Adds a sales column to WooCommerce products list.
