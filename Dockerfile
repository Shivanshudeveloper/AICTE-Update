FROM httpd:latest

WORKDIR /var/www/html

COPY . .

EXPOSE 8080