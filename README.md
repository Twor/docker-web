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
