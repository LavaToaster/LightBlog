#!/usr/bin/env bash

sudo apt-get update

sudo debconf-set-selections <<< "mysql-server mysql-server/root_password password root"
sudo debconf-set-selections <<< "mysql-server mysql-server/root_password_again password root"

sudo apt-get install -y vim curl python-software-properties

sudo add-apt-repository -y ppa:ondrej/php5

sudo apt-get update

sudo apt-get install -y nginx php5-fpm php5-cli php5-curl php5-gd php5-imagick php5-mcrypt php5-mysql mysql-server mysql-client git-core

sudo apt-get install -y php5-xdebug

cat << EOF | sudo tee -a /etc/php5/mods-available/xdebug.ini
xdebug.scream=1
xdebug.cli_color=1
xdebug.show_local_vars=1
EOF

sudo rm -rf /var/www
sudo ln -fs /vagrant /var/www

sed -i "s/error_reporting = .*/error_exitlreporting = E_ALL/" /etc/php5/fpm/php.ini
sed -i "s/display_errors = .*/display_errors = On/" /etc/php5/fpm/php.ini

sed -i "s/listen = 127.0.0.1:9000/listen = \/tmp\/php5-fpm.sock/" /etc/php5/fpm/pool.d/www.conf

sudo rm /etc/nginx/sites-available/default
sudo cp /vagrant/.kapow/vhost /etc/nginx/sites-available/default

sudo service php5-fpm restart
sudo service nginx restart

mysql --user=root --password="root" -Bse "CREATE DATABASE IF NOT EXISTS laravel CHARACTER SET utf8 COLLATE utf8_unicode_ci"

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

echo "--- Installing zsh ---"
apt-get install -y zsh

echo "-- Installing oh-my-zsh ---"
curl -L https://github.com/robbyrussell/oh-my-zsh/raw/master/tools/install.sh | sh

echo -n "Setting oh-my-zsh theme to rkj-repos... "
sed -i "s/robbyrussell/rkj-repos/g" ~/.zshrc
echo "Done!"

echo "---Setting zsh to default shell---"
sudo chsh vagrant -s /bin/zsh
echo "Done!"

echo "# alias artisan command so you do not have to cd to directory" >> /home/vagrant/.zshrc
echo 'alias artisan="php /vagrant/artisan"' >> /home/vagrant/.zshrc

php /vagrant/artisan migrate --env=local
php /vagrant/artisan db:seed --env=local