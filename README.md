- php
- mysql
- nginx
- redis
- #composer
- #phpmyadmin

1. install `docker` `docker-compose`
2. `sudo usermod -aG docker your-user`

Clone the project
To install Git, download it and install following the instructions :

    git clone https://github.com/Twor/docker-web.git

Go to the project directory :

    cd docker-web

Pull images run

    docker-compose up -d

interview `localhost:8000`

You can edit `.env` and `docker-compose.yml`

```bash
├── data
│   ├── db
│   │   └── mysql
│   └── redis
├── docker-compose.yml
├── .env
├── etc
│   ├── nginx
│   │   ├── default.conf
│   │   └── default.template
│   ├── php
│   │   └── php.ini
│   ├── redis
│   │   └── redis.conf
│   └── ssl
├── README.md
└── web
    └── public
        ├── index.php
        └── mysql.php
```

Connect to the redis
```php
<?php
$servername = 'mysql';
$username = 'root';
$password = 'root';

$mysql = new MySQLi($servername, $username, $password, 'wordpress');
if ($mysql->connect_errno) {
echo "Errno: " . $mysql->connect_errno . "\n";
}
$result = $mysql -> query("show databases");
print_r($result);
```

Connect to the redis
```php
<?php
$redis = new Redis();
 $redis->connect('redis', 6379);
 echo "Connection to server sucessfully";
 $redis->set("tutorial-name", "sucessfully");
 echo "Stored string in redis:: " . $redis->get("tutorial-name");
```