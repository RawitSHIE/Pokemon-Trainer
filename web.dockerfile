FROM nginx:1.12.1-alpine

ADD vhost.conf /etc/nginx/conf.d/default.conf
ADD nginx.conf /etc/nginx/nginx.conf
