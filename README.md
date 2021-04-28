├── data
│   └── db
│       └── mysql
│           ├── auto.cnf
│           ├── ...
├── docker-compose.yml
├── etc
│   ├── nginx
│   │   ├── default.conf
│   │   └── default.template.conf
│   ├── php
│   │   └── php.ini
│   ├── redis
│   │   └── redis.conf
│   └── ssl
├── Makefile
├── README.md
└── web
    ├── app
    │   ├── composer.json
    │   ├── composer.json.dist
    │   ├── phpunit.xml.dist
    │   ├── src
    │   │   └── Foo.php
    │   └── test
    │       ├── bootstrap.php
    │       └── FooTest.php
    └── public
        └── index.php