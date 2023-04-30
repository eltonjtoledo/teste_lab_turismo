FROM php:7.4
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "/var/www/html/index.php"]