FROM nginx:stable-alpine

# modified version from php:alpine image

# ensure www-data user exists
RUN set -x ; \
  addgroup -g 82 -S www-data ; \
  adduser -u 82 -D -S -G www-data www-data && exit 0 ; exit 1
# 82 is the standard uid/gid for "www-data" in Alpine
# http://git.alpinelinux.org/cgit/aports/tree/main/apache2/apache2.pre-install?h=v3.3.2
# http://git.alpinelinux.org/cgit/aports/tree/main/lighttpd/lighttpd.pre-install?h=v3.3.2
# http://git.alpinelinux.org/cgit/aports/tree/main/nginx-initscripts/nginx-initscripts.pre-install?h=v3.3.2


# The issue encountered with the non-existing www-data that causes the wordpress to throw an error of "Could not create directory" because the nginx alpine tag image does not create the www-data user by default

# Here is the reference link 
# https://gist.github.com/briceburg/47131d8caf235334b6114954a6e64922
