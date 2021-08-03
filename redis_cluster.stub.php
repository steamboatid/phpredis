<?php

/**
 * @generate-function-entries
 * @generate-legacy-arginfo
 */

class RedisCluster {

    public function __construct(string|null $name, array $seeds = NULL, int|float $timeout = 0, int|float $read_timeout = 0, bool $persistant = false, mixed $auth = NULL, array $context = NULL);

    public function _masters(): array;

    public function _prefix(string $key): bool|string;

    public function _redir(): string|null;

    public function _serialize(mixed $value): bool|string;

    public function _unserialize(string $value): mixed;

    public function acl(string|array $key_or_address, string $subcmd, string ...$args): mixed;

    public function append(string $key, mixed $value): bool|int;

    public function bgrewriteaof(string|array $key_or_address): bool;

    public function bgsave(string|array $key_or_address): bool;

    public function bitcount(string $key, int $start = 0, int $end = -1): bool|int;

    public function bitop(string $operation, string $deskey, string $srckey, string ...$otherkeys): bool|int;

    public function bitpos(string $key, int $bit, int $start = NULL, int $end = NULL): bool|int;

    public function blpop(string|array $key, string|int $timeout_or_key, mixed ...$extra_args): array;

    public function brpop(string|array $key, string|int $timeout_or_key, mixed ...$extra_args): array;

    public function brpoplpush(string $srckey, string $deskey, int $timeout): mixed;

    public function bzpopmax(string|array $key, string|int $timeout_or_key, mixed ...$extra_args): array;

    public function bzpopmin(string|array $key, string|int $timeout_or_key, mixed ...$extra_args): array;

    public function clearlasterror(): bool;

    public function client(string|array $node, string $subcommand, string|null $arg): array|string|bool;

    public function close(): bool;

    public function cluster(string|array $node, string $command, mixed ...$extra_args): mixed;

    public function command(mixed ...$extra_args): mixed;

    public function config(string|array $node, string $subcommand, mixed ...$extra_args): mixed;

    public function dbsize(string|array $key_or_address): int;

    public function decr(string $key): int;

    public function decrby(string $key, int $value): int;

    public function decrbyfloat(string $key, float $value): float;

    public function del(string $key, string ...$other_keys): array;

    public function discard(): bool;

    public function dump(string $key): string;

    public function echo(string|array $node, string $msg): string;

    public function eval(string $script, array $args = [], int $num_keys = 0): mixed;

    public function evalsha(string $script_sha, array $args = [], int $num_keys = 0): mixed;

    public function exec(): array;

    public function exists(string $key): int;

    public function expire(string $key, int $timeout): bool;

    public function expireat(string $key, int $timestamp): bool;

    public function flushall(string|array $node, bool $async = false): bool;

    public function flushdb(string|array $node, bool $async = false): bool;

    public function geoadd(string $key, float $lng, float $lat, string $member, mixed ...$other_triples): int;

    public function geodist(string $key, string $src, string $dest, ?string $unit = null): array;

    public function geohash(string $key, string $member, string ...$other_members): array;

    public function geopos(string $key, string $member, string ...$other_members): array;

    public function georadius(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): array;

    public function georadius_ro(string $key, float $lng, float $lat, float $radius, string $unit, array $options = []): array;

    public function georadiusbymember(string $key, string $member, float $radius, string $unit, array $options = []): array;

    public function georadiusbymember_ro(string $key, string $member, float $radius, string $unit, array $options = []): array;

    public function get(string $key): string;

    public function getbit(string $key, int $value): int;

    public function getlasterror(): string|null;

    public function getmode(): int;

    public function getoption(int $option): mixed;

    public function getrange(string $key, int $start, int $end): string;

    public function getset(string $key, mixed $value): string;

    public function hdel(string $key, string $member, string ...$other_members): int;

    public function hexists(string $key, string $member): bool;

    public function hget(string $key, string $member): string;

    public function hgetall(string $key): array;

    public function hincrby(string $key, string $member, int $value): int;

    public function hincrbyfloat(string $key, string $member, float $value): float;

    public function hkeys(string $key): array;

    public function hlen(string $key): int;

    public function hmget(string $key, array $members): array;

    public function hmset(string $key, array $key_values): bool;

    public function hscan(string $key, int $iterator, ?string $pattern = null, int $count = 0): array|bool;

    public function hset(string $key, string $member, mixed $value): int;

    public function hsetnx(string $key, string $member, mixed $value): bool;

    public function hstrlen(string $key, string $field): int;

    public function hvals(string $key): array;

    public function incr(string $key): int;

    public function incrby(string $key, int $value): int;

    public function incrbyfloat(string $key, float $value): float;

    public function info(string|array $node, ?string $section = null): array;

    public function keys(string $pattern): array;

    public function lastsave(string|array $node): int;

    public function lget(string $key, int $index): string|bool;

    public function lindex(string $key, int $index): string|bool;

    public function linsert(string $key, string $pos, mixed $pivot, mixed $value): int;

    public function llen(string $key): int|bool;

    public function lpop(string $key): string|bool;

    public function lpush(string $key, mixed $value, mixed ...$other_values): int|bool;

    public function lpushx(string $key, mixed $value): int|bool;

    public function lrange(string $key, int $start, int $end): array;

    public function lrem(string $key, int $count, string $value): int|bool;

    public function lset(string $key, int $index, string $value): bool;

    public function ltrim(string $key, int $start, int $end): bool;

    public function mget(array $keys): array;

    public function mset(array $key_values): bool;

    public function msetnx(array $key_values): int;

    public function multi(): self|bool;

    public function object(string $subcommand, string $key): string|int|bool;

    public function persist(string $key): bool;

    public function pexpire(string $key, int $timeout): bool;

    public function pexpireat(string $key, int $timestamp): bool;

    public function pfadd(string $key, array $elements): bool;

    public function pfcount(string $key): int;

    public function pfmerge(string $key, array $keys): bool;

    public function ping(string|array $key_or_address, ?string $message): mixed;

    public function psetex(string $key, int $timeout, string $value): bool;

    public function psubscribe(array $patterns, callable $callback): void;

    public function pttl(string $key): int;

    public function publish(string $channel, string $message): bool;

    public function pubsub(string|array $key_or_address, string ...$values): mixed;

    public function punsubscribe(string $pattern, string ...$other_patterns): bool|array;
}

/*
    TODO:
    public function randomkey
    public function rawcommand
    public function rename
    public function renamenx
    public function restore
    public function role
    public function rpop
    public function rpoplpush
    public function rpush
    public function rpushx
    public function sadd
    public function saddarray
    public function save
    public function scan
    public function scard
    public function script
    public function sdiff
    public function sdiffstore
    public function set
    public function setbit
    public function setex
    public function setnx
    public function setoption
    public function setrange
    public function sinter
    public function sinterstore
    public function sismember
    public function slowlog
    public function smembers
    public function smove
    public function sort
    public function spop
    public function srandmember
    public function srem
    public function sscan
    public function strlen
    public function subscribe
    public function sunion
    public function sunionstore
    public function time
    public function ttl
    public function type
    public function unsubscribe
    public function unlink
    public function unwatch
    public function watch
    public function xack
    public function xadd
    public function xclaim
    public function xdel
    public function xgroup
    public function xinfo
    public function xlen
    public function xpending
    public function xrange
    public function xread
    public function xreadgroup
    public function xrevrange
    public function xtrim
    public function zadd
    public function zcard
    public function zcount
    public function zincrby
    public function zinterstore
    public function zlexcount
    public function zpopmax
    public function zpopmin
    public function zrange
    public function zrangebylex
    public function zrangebyscore
    public function zrank
    public function zrem
    public function zremrangebylex
    public function zremrangebyrank
    public function zremrangebyscore
    public function zrevrange
    public function zrevrangebylex
    public function zrevrangebyscore
    public function zrevrank
    public function zscan
    public function zscore
    public function zunionstore
*/
