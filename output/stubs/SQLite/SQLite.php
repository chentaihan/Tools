<?php
class SQLiteDatabase  {
	final public function __construct ($filename, $mode = 0666, &$error_message) {}
	public function query ($query, $result_type, &$error_message) {}
	public function queryExec ($query, &$error_message) {}
	public function arrayQuery ($query, $result_type, $decode_binary) {}
	public function singleQuery ($query, $first_row_only, $decode_binary) {}
	public function unbufferedQuery ($query, $result_type = SQLITE_BOTH, &$error_message) {}
	public function lastInsertRowid () {}
	public function changes () {}
	public function createAggregate ($function_name, $step_func, $finalize_func, $num_args = -1) {}
	public function createFunction ($function_name, $callback, $num_args = -1) {}
	public function busyTimeout ($milliseconds) {}
	public function lastError () {}
	public function fetchColumnTypes ($table_name, $result_type = SQLITE_ASSOC) {}
}
final class SQLiteResult implements Iterator, Traversable, Countable {
	public function fetch ($result_type = SQLITE_BOTH, $decode_binary =  true) {}
	public function fetchObject ($class_name, $ctor_params, $decode_binary = true) {}
	public function fetchSingle ($decode_binary = true) {}
	public function fetchAll ($result_type, array $ctor_params,  $decode_binary = true) {}
	public function column ($index_or_name, $decode_binary = true) {}
	public function numFields () {}
	public function fieldName ($field_index) {}
	public function current ($result_type = SQLITE_BOTH , $decode_binary = true) {}
	public function key () {}
	public function next () {}
	public function valid () {}
	public function rewind () {}
	public function count () {}
	public function prev () {}
	public function hasPrev () {}
	public function numRows () {}
	public function seek ($row) {}
}
final class SQLiteUnbuffered  {
	public function fetch ($result_type, $decode_binary) {}
	public function fetchObject ($class_name, $ctor_params, $decode_binary) {}
	public function fetchSingle ($decode_binary) {}
	public function fetchAll ($result_type, $decode_binary) {}
	public function column ($index_or_name, $decode_binary) {}
	public function numFields () {}
	public function fieldName ($field_index) {}
	public function current ($result_type, $decode_binary) {}
	public function next () {}
	public function valid () {}
}
final class SQLiteException extends RuntimeException  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;
	final private function __clone () {}
	public function __construct ($message, $code, $previous) {}
	public function __toString () {}
}
function sqlite_open ($filename, $mode = null, &$error_message = null) {}
function sqlite_popen ($filename, $mode = null, &$error_message = null) {}
function sqlite_close ($dbhandle) {}
function sqlite_query ($query, $dbhandle, $result_type = null, &$error_msg = SQLITE_BOTH) {}
function sqlite_exec ($dbhandle, $query, &$error_msg = null) {}
function sqlite_array_query ($dbhandle, $query, $result_type = null, $decode_binary = null) {}
function sqlite_single_query ($db, $query, $first_row_only = null, $decode_binary = null) {}
function sqlite_fetch_array ($result, $result_type = SQLITE_BOTH, $decode_binary = null) {}
function sqlite_fetch_object ($result, $class_name = null, array $ctor_params = null, $decode_binary = null) {}
function sqlite_fetch_single ($result, $decode_binary = null) {}
function sqlite_fetch_string ($result, $decode_binary) {}
function sqlite_fetch_all ($result_type = null, $decode_binary = null) {}
function sqlite_current ($result, $result_type = null, $decode_binary = null) {}
function sqlite_column ($result, $index_or_name, $decode_binary = null) {}
function sqlite_libversion () {}
function sqlite_libencoding () {}
function sqlite_changes ($db) {}
function sqlite_last_insert_rowid ($dbhandle) {}
function sqlite_num_rows ($result) {}
function sqlite_num_fields ($result) {}
function sqlite_field_name ($result, $field_index) {}
function sqlite_seek ($result, $rownum) {}
function sqlite_rewind ($result) {}
function sqlite_next ($result) {}
function sqlite_prev ($result) {}
function sqlite_valid ($result) {}
function sqlite_has_more ($result) {}
function sqlite_has_prev ($result) {}
function sqlite_escape_string ($item) {}
function sqlite_busy_timeout ($dbhandle, $milliseconds) {}
function sqlite_last_error ($dbhandle) {}
function sqlite_error_string ($error_code) {}
function sqlite_unbuffered_query ($dbhandle, $query, $result_type = SQLITE_BOTH, &$error_msg = null) {}
function sqlite_create_aggregate ($dbhandle, $function_name, $step_func, $finalize_func, $num_args = null) {}
function sqlite_create_function ($dbhandle, $function_name, $callback, $num_args = null) {}
function sqlite_factory ($filename, $mode = null, &$error_message = null) {}
function sqlite_udf_encode_binary ($data) {}
function sqlite_udf_decode_binary ($data) {}
function sqlite_fetch_column_types ($dbhandle, $table_name, $result_type = null) {}
define ('SQLITE_BOTH', 3);
define ('SQLITE_NUM', 2);
define ('SQLITE_ASSOC', 1);
define ('SQLITE_OK', 0);
define ('SQLITE_ERROR', 1);
define ('SQLITE_INTERNAL', 2);
define ('SQLITE_PERM', 3);
define ('SQLITE_ABORT', 4);
define ('SQLITE_BUSY', 5);
define ('SQLITE_LOCKED', 6);
define ('SQLITE_NOMEM', 7);
define ('SQLITE_READONLY', 8);
define ('SQLITE_INTERRUPT', 9);
define ('SQLITE_IOERR', 10);
define ('SQLITE_CORRUPT', 11);
define ('SQLITE_NOTFOUND', 12);
define ('SQLITE_FULL', 13);
define ('SQLITE_CANTOPEN', 14);
define ('SQLITE_PROTOCOL', 15);
define ('SQLITE_EMPTY', 16);
define ('SQLITE_SCHEMA', 17);
define ('SQLITE_TOOBIG', 18);
define ('SQLITE_CONSTRAINT', 19);
define ('SQLITE_MISMATCH', 20);
define ('SQLITE_MISUSE', 21);
define ('SQLITE_NOLFS', 22);
define ('SQLITE_AUTH', 23);
define ('SQLITE_NOTADB', 26);
define ('SQLITE_FORMAT', 24);
define ('SQLITE_ROW', 100);
define ('SQLITE_DONE', 101);
