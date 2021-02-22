# Todo API


## Running
```bash
composer install
php -S localhost:8888 -t public public/index.php
curl localhost:8888/list
```

## Building .zip for distribution

`zip -r TODO-skeleton.zip todo-api/ -x "todo-api/vendor/*" "todo-api/.git*"`
