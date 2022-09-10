#!/bin/sh

cd /tb2/root/github/phpredis

if [ ! -e ./configure ]; then
	/usr/bin/phpize;
	./configure  CFLAGS="-O3" --enable-redis-igbinary --enable-redis-msgpack \
	--enable-redis-lzf --with-liblzf --enable-redis-lz4 --with-liblz4 \
	--enable-redis-zstd
fi

make clean;
/usr/bin/phpize --clean

[[ -d .git ]] && git add .
