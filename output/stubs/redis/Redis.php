<?php
class Redis
{
    const AFTER                 = 'after';
    const BEFORE                = 'before';
    const OPT_SERIALIZER        = 1;
    const OPT_PREFIX            = 2;
    const OPT_READ_TIMEOUT      = 3;
    const OPT_SCAN              = 4;
    const SERIALIZER_NONE       = 0;
    const SERIALIZER_PHP        = 1;
    const SERIALIZER_IGBINARY   = 2;
    const ATOMIC                = 0;
    const MULTI                 = 1;
    const PIPELINE              = 2;
    const REDIS_NOT_FOUND       = 0;
    const REDIS_STRING          = 1;
    const REDIS_SET             = 2;
    const REDIS_LIST            = 3;
    const REDIS_ZSET            = 4;
    const REDIS_HASH            = 5;
    const SCAN_NORETRY          = 0;
    const SCAN_RETRY            = 1;
    public function __construct( ) {}
    public function connect( $host, $port = 6379, $timeout = 0.0, $reserved = null, $retry_interval = 0 ) {}
    public function psetex($key, $ttl, $value) {}
    public function sScan($key, $iterator, $pattern = '', $count = 0) {}
    public function scan( &$iterator, $pattern = null, $count = 0 ) {}
    public function zScan($key, $iterator, $pattern = '', $count = 0) {}
    public function hScan($key, $iterator, $pattern = '', $count = 0) {}
    public function client($command, $arg = '') {}
    public function slowlog($command) {}
    public function open( $host, $port = 6379, $timeout = 0.0, $retry_interval = 0 ) {}
    public function pconnect( $host, $port = 6379, $timeout = 0.0 ) {}
    public function popen( $host, $port = 6379, $timeout = 0.0 ) {}
    public function close( ) {}
    public function setOption( $name, $value ) {}
    public function getOption( $name ) {}
    public function ping( ) {}
    public function get( $key ) {}
    public function set( $key, $value, $timeout = 0 ) {}
    public function setex( $key, $ttl, $value ) {}
    public function setnx( $key, $value ) {}
    public function del( $key1, $key2 = null, $key3 = null ) {}
    public function delete( $key1, $key2 = null, $key3 = null ) {}
    public function multi( $mode = Redis::MULTI ) {}
    public function exec( ) {}
    public function discard( ) {}
    public function watch( $key ) {}
    public function unwatch( ) {}
    public function subscribe( $channels, $callback ) {}
    public function psubscribe( $patterns, $callback ) {}
    public function publish( $channel, $message ) {}
    public function pubsub( $keyword, $argument ) {}
    public function exists( $key ) {}
    public function incr( $key ) {}
    public function incrByFloat( $key, $increment ) {}
    public function incrBy( $key, $value ) {}
    public function decr( $key ) {}
    public function decrBy( $key, $value ) {}
    public function getMultiple( array $keys ) {}
    public function lPush( $key, $value1, $value2 = null, $valueN = null ) {}
    public function rPush( $key, $value1, $value2 = null, $valueN = null ) {}
    public function lPushx( $key, $value ) {}
    public function rPushx( $key, $value ) {}
    public function lPop( $key ) {}
    public function rPop( $key ) {}
    public function blPop( array $keys, $timeout) {}
    public function brPop( array $keys, $timeout ) {}
    public function lLen( $key ) {}
    public function lSize( $key ) {}
    public function lIndex( $key, $index ) {}
    public function lGet( $key, $index ) {}
    public function lSet( $key, $index, $value ) {}
    public function lRange( $key, $start, $end ) {}
    public function lGetRange( $key, $start, $end ) {}
    public function lTrim( $key, $start, $stop ) {}
    public function listTrim( $key, $start, $stop ) {}
    public function lRem( $key, $value, $count ) {}
    public function lRemove( $key, $value, $count ) {}
    public function lInsert( $key, $position, $pivot, $value ) {}
    public function sAdd( $key, $value1, $value2 = null, $valueN = null ) {}
    public function sAddArray( $key, array $values) {}
    public function sRem( $key, $member1, $member2 = null, $memberN = null ) {}
    public function sRemove( $key, $member1, $member2 = null, $memberN = null ) {}
    public function sMove( $srcKey, $dstKey, $member ) {}
    public function sIsMember( $key, $value ) {}
    public function sContains( $key, $value ) {}
    public function sCard( $key ) {}
    public function sPop( $key ) {}
    public function sRandMember( $key, $count = null ) {}
    public function sInter( $key1, $key2, $keyN = null ) {}
    public function sInterStore( $dstKey, $key1, $key2, $keyN = null ) {}
    public function sUnion( $key1, $key2, $keyN = null ) {}
    public function sUnionStore( $dstKey, $key1, $key2, $keyN = null ) {}
    public function sDiff( $key1, $key2, $keyN = null ) {}
    public function sDiffStore( $dstKey, $key1, $key2, $keyN = null ) {}
    public function sMembers( $key ) {}
    public function sGetMembers( $key ) {}
    public function getSet( $key, $value ) {}
    public function randomKey( ) {}
    public function select( $dbindex ) {}
    public function move( $key, $dbindex ) {}
    public function rename( $srcKey, $dstKey ) {}
    public function renameKey( $srcKey, $dstKey ) {}
    public function renameNx( $srcKey, $dstKey ) {}
    public function expire( $key, $ttl ) {}
    public function pExpire( $key, $ttl ) {}
    public function setTimeout( $key, $ttl ) {}
    public function expireAt( $key, $timestamp ) {}
    public function pExpireAt( $key, $timestamp ) {}
    public function keys( $pattern ) {}
    public function getKeys( $pattern ) {}
    public function dbSize( ) {}
    public function auth( $password ) {}
    public function bgrewriteaof( ) {}
    public function slaveof( $host = '127.0.0.1', $port = 6379 ) {}
    public function object( $string = '', $key = '' ) {}
    public function save( ) {}
    public function bgsave( ) {}
    public function lastSave( ) {}
    public function wait( $numSlaves, $timeout ) {}
    public function type( $key ) {}
    public function append( $key, $value ) {}
    public function getRange( $key, $start, $end ) {}
    public function substr( $key, $start, $end ) {}
    public function setRange( $key, $offset, $value ) {}
    public function strlen( $key ) {}
    public function bitpos( $key, $bit, $start = 0, $end = null) {}
    public function getBit( $key, $offset ) {}
    public function setBit( $key, $offset, $value ) {}
    public function bitCount( $key ) {}
    public function bitOp( $operation, $retKey, ...$keys) {}
    public function flushDB( ) {}
    public function flushAll( ) {}
    public function sort( $key, $option = null ) {}
    public function info( $option = null ) {}
    public function resetStat( ) {}
    public function ttl( $key ) {}
    public function pttl( $key ) {}
    public function persist( $key ) {}
    public function mset( array $array ) {}
    public function mget( array $array ) {}
    public function msetnx( array $array ) {}
    public function rpoplpush( $srcKey, $dstKey ) {}
    public function brpoplpush( $srcKey, $dstKey, $timeout ) {}
    public function zAdd( $key, $score1, $value1, $score2 = null, $value2 = null, $scoreN = null, $valueN = null ) {}
    public function zRange( $key, $start, $end, $withscores = null ) {}
    public function zRem( $key, $member1, $member2 = null, $memberN = null ) {}
    public function zDelete( $key, $member1, $member2 = null, $memberN = null ) {}
    public function zRevRange( $key, $start, $end, $withscore = null ) {}
    public function zRangeByScore( $key, $start, $end, array $options = array() ) {}
    public function zRevRangeByScore( $key, $start, $end, array $options = array() ) {}
    public function zRangeByLex( $key, $min, $max, $offset = null, $limit = null ) {}
    public function zRevRangeByLex( $key, $min, $max, $offset = null, $limit = null ) {}
    public function zCount( $key, $start, $end ) {}
    public function zRemRangeByScore( $key, $start, $end ) {}
    public function zDeleteRangeByScore( $key, $start, $end ) {}
    public function zRemRangeByRank( $key, $start, $end ) {}
    public function zDeleteRangeByRank( $key, $start, $end ) {}
    public function zCard( $key ) {}
    public function zSize( $key ) {}
    public function zScore( $key, $member ) {}
    public function zRank( $key, $member ) {}
    public function zRevRank( $key, $member ) {}
    public function zIncrBy( $key, $value, $member ) {}
    public function zUnion($Output, $ZSetKeys, array $Weights = null, $aggregateFunction = 'SUM') {}
    public function zInter($Output, $ZSetKeys, array $Weights = null, $aggregateFunction = 'SUM') {}
    public function hSet( $key, $hashKey, $value ) {}
    public function hSetNx( $key, $hashKey, $value ) {}
    public function hGet($key, $hashKey) {}
    public function hLen( $key ) {}
    public function hDel( $key, $hashKey1, $hashKey2 = null, $hashKeyN = null ) {}
    public function hKeys( $key ) {}
    public function hVals( $key ) {}
    public function hGetAll( $key ) {}
    public function hExists( $key, $hashKey ) {}
    public function hIncrBy( $key, $hashKey, $value ) {}
    public function hIncrByFloat( $key, $field, $increment ) {}
    public function hMset( $key, $hashKeys ) {}
    public function hMGet( $key, $hashKeys ) {}
    public function config( $operation, $key, $value ) {}
    public function evaluate( $script, $args = array(), $numKeys = 0 ) {}
    public function evalSha( $scriptSha, $args = array(), $numKeys = 0 ) {}
    public function evaluateSha( $scriptSha, $args = array(), $numKeys = 0 ) {}
    public function script( $command, $script ) {}
    public function getLastError() {}
    public function clearLastError() {}
    public function _prefix( $value ) {}
    public function _unserialize( $value ) {}
    public function _serialize( $value ) {}
    public function dump( $key ) {}
    public function restore( $key, $ttl, $value ) {}
    public function migrate( $host, $port, $key, $db, $timeout, $copy = false, $replace = false ) {}
    public function time() {}
    public function pfAdd( $key, array $elements ) {}
    public function pfCount( $key ) {}
    public function pfMerge( $destkey, array $sourcekeys ) {}
    public function rawCommand( $command, $arguments ) {}
    public function getMode() {}
}
class RedisException extends Exception {}
class RedisArray {
    function __construct($name = '', array $hosts = NULL, array $opts = NULL) {}
    public function _hosts() {}
    public function _function() {}
    public function _target($key) {}
    public function _rehash() {}
}
