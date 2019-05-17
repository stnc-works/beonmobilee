sudo chmod -R 777  var/*;
sudo chmod -R 777  generated/*;
sudo chmod -R 777  pub/static/*;
sudo chmod -R 777  pub/media/*;
php bin/magento maintenance:enable;
bin/magento module:disable --clear-static-content Smartwave_Dailydeals
php bin/magento setup:upgrade;
php bin/magento setup:di:compile;
php bin/magento setup:static-content:deploy -f;
php bin/magento cache:clean;
php bin/magento maintenance:disable;
sudo chmod -R 777  var/*;
sudo chmod -R 777  generated/*;
sudo chmod -R 777  pub/static/*;
sudo chmod -R 777  pub/media/*;
