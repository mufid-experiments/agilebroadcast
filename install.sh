#!/bin/bash

sudo apt-get update

sudo apt remove -y apache2
sudo apt remove -y mysql-server
sudo apt autoremove -y

sudo apt-get install -y \
    ca-certificates \
    curl \
    gnupg \
    lsb-release

echo "GPG..."
curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg

echo "DEB..."
echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null

echo "UPDATE..."
sudo apt-get update
sudo apt-get install -y docker-ce docker-ce-cli containerd.io

sudo curl -L "https://github.com/docker/compose/releases/download/1.29.2/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose

cd ..
curl -s "https://laravel.build/example-app" | bash

cd example-app
git init .
git remote add origin git@github.com:mufid-experiments/agilebroadcast.git
git fetch --all
git reset --hard origin/master

./vendor/bin/sail up
