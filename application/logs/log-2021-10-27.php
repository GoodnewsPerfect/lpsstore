<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-27 16:30:58 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 16:30:58 --> Query error: Table 'zendstore.value_store' doesn't exist - Invalid query: SELECT value FROM value_store WHERE thekey = 'outOfStock'
ERROR - 2021-10-27 16:36:56 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 16:36:56 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 16:36:56 --> Query error: Table 'zendstore.active_pages' doesn't exist - Invalid query: SELECT `name`
FROM `active_pages`
WHERE `enabled` = 1
ERROR - 2021-10-27 16:36:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\system\core\Common.php 570
ERROR - 2021-10-27 16:44:07 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 16:44:07 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 16:44:07 --> Query error: Table 'zendstore.vendors' doesn't exist - Invalid query: SELECT `vendors`.`url` as `vendor_url`, `products`.`id`, `products`.`quantity`, `products`.`image`, `products`.`url`, `products_translations`.`price`, `products_translations`.`title`, `products_translations`.`old_price`
FROM `products`
LEFT JOIN `products_translations` ON `products_translations`.`for_id` = `products`.`id`
LEFT JOIN `vendors` ON `vendors`.`id` = `products`.`vendor_id`
WHERE `products_translations`.`abbr` = 'en'
AND `visibility` = 1
AND `quantity` > 0
ORDER BY `products`.`procurement` DESC
 LIMIT 5
ERROR - 2021-10-27 16:44:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\system\core\Common.php 570
ERROR - 2021-10-27 16:44:25 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 16:44:25 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 16:44:25 --> Query error: Table 'zendstore.vendors' doesn't exist - Invalid query: SELECT `vendors`.`url` as `vendor_url`, `products`.`id`, `products`.`quantity`, `products`.`image`, `products`.`url`, `products_translations`.`price`, `products_translations`.`title`, `products_translations`.`old_price`
FROM `products`
LEFT JOIN `products_translations` ON `products_translations`.`for_id` = `products`.`id`
LEFT JOIN `vendors` ON `vendors`.`id` = `products`.`vendor_id`
WHERE `products_translations`.`abbr` = 'en'
AND `visibility` = 1
AND `quantity` > 0
ORDER BY `products`.`procurement` DESC
 LIMIT 5
ERROR - 2021-10-27 16:44:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\system\core\Common.php 570
ERROR - 2021-10-27 17:03:31 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:03:31 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:03:31 --> Query error: Table 'zendstore.vendors' doesn't exist - Invalid query: SELECT `vendors`.`url` as `vendor_url`, `products`.`id`, `products`.`quantity`, `products`.`image`, `products`.`url`, `products_translations`.`price`, `products_translations`.`title`, `products_translations`.`old_price`
FROM `products`
LEFT JOIN `products_translations` ON `products_translations`.`for_id` = `products`.`id`
LEFT JOIN `vendors` ON `vendors`.`id` = `products`.`vendor_id`
WHERE `products_translations`.`abbr` = 'en'
AND `visibility` = 1
AND `quantity` > 0
ORDER BY `products`.`procurement` DESC
 LIMIT 5
ERROR - 2021-10-27 17:03:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\system\core\Common.php 570
ERROR - 2021-10-27 17:14:02 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:02 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:02 --> Severity: Warning --> Trying to access array offset on value of type int C:\xampp\htdocs\zendstore\application\views\templates\redlabel\_parts\header.php 188
ERROR - 2021-10-27 17:14:05 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:05 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 64
ERROR - 2021-10-27 17:14:06 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 47
ERROR - 2021-10-27 17:14:06 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 27
ERROR - 2021-10-27 17:14:06 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 112
ERROR - 2021-10-27 17:14:06 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:06 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 81
ERROR - 2021-10-27 17:14:07 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:07 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:07 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 112
ERROR - 2021-10-27 17:14:08 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:08 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:14:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\application\controllers\Loader.php 112
ERROR - 2021-10-27 17:14:57 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:14:57 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:15:26 --> Severity: 8192 --> Required parameter $big_get follows optional parameter $limit C:\xampp\htdocs\zendstore\application\models\Public_model.php 82
ERROR - 2021-10-27 17:15:26 --> Severity: Warning --> Trying to access array offset on value of type null C:\xampp\htdocs\zendstore\application\modules\admin\models\Home_admin_model.php 130
ERROR - 2021-10-27 17:15:26 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\zendstore\system\core\Exceptions.php:271) C:\xampp\htdocs\zendstore\system\helpers\url_helper.php 564
