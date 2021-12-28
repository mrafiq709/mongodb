# mongodb
```
wget -qO - https://www.mongodb.org/static/pgp/server-5.0.asc | sudo apt-key add -
echo "deb [ arch=amd64,arm64 ] https://repo.mongodb.org/apt/ubuntu focal/mongodb-org/5.0 multiverse" | sudo tee /etc/apt/sources.list.d/mongodb-org-5.0.list
sudo apt-get update
sudo apt-get install -y mongodb-org

echo "mongodb-org hold" | sudo dpkg --set-selections
echo "mongodb-org-database hold" | sudo dpkg --set-selections
echo "mongodb-org-server hold" | sudo dpkg --set-selections
echo "mongodb-org-shell hold" | sudo dpkg --set-selections
echo "mongodb-org-mongos hold" | sudo dpkg --set-selections
echo "mongodb-org-tools hold" | sudo dpkg --set-selections

sudo systemctl start mongod

```
<a href="https://imgur.com/iYdSKIb"><img src="https://i.imgur.com/iYdSKIb.png" title="source: imgur.com" /></a><br/><br/>
```
sudo mkdir /var/lib/mongodb
sudo mkdir /var/log/mongodb
sudo chown -R mongodb:mongodb /var/lib/mongodb
chown -R mongodb:mongodb /var/log/mongodb
```
<a href="https://imgur.com/ddmEKaK"><img src="https://i.imgur.com/ddmEKaK.png" title="source: imgur.com" /></a><br/><br/>

##### references
https://viblo.asia/p/laravel-with-mongodb-V3m5W1VyZO7

https://appdividend.com/2018/05/10/laravel-mongodb-crud-tutorial-with-example/
