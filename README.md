## cursoPhp 

# Instalar PHP7.4 

```PHP
  sudo apt-get install -y php7.4-cli php7.4-dev php7.4-pgsql php7.4-sqlite3 php7.4-gd php7.4-curl php7.4-memcached php7.4-imap php7.4-mysql
  php7.4-mbstring php7.4-xml php7.4-imagick php7.4-zip php7.4-bcmath php7.4-soap php7.4-intl php7.4-readline php7.4-common php7.4-pspell php7.4-tidy
  php7.4-xmlrpc php7.4-xsl php7.4-opcache php7.4-apcu php-curl php7.4-gd php7.4-mbstring php7.4-xml php7.4-xmlrpc php7.4-soap php7.4-intl php7.4-zip
  php7.4-fpm php7.4-json php7.4-pear
```


# XDebug

```JAVASCRIPT
{
	"version": "0.2.0",
	"configurations": [{
			"name": "Listen for XDebug",
			"type": "php",
			"request": "launch",
			"port": 9000,
			"xdebugSettings": {
				"max_children": 1500,
				"max_data": 9048
			},
			"pathMappings": {
				"/var/www/html": "/var/www/html",
			}
		},
		{
			"name": "Launch currently open script",
			"type": "php",
			"request": "launch",
			"program": "${file}",
			"cwd": "${fileDirname}",
			"port": 9000
		}
	]
}
```
