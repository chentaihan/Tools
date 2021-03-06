<?php
class SNMP  {
    public $max_oids;
    public $valueretrieval;
    public $quick_print;
    public $enum_print;
    public $oid_output_format;
    public $oid_increasing_check;
    public $exceptions_enabled;
    public $info;
    const VERSION_1 = 0;
	const VERSION_2c = 1;
	const VERSION_2C = 1;
	const VERSION_3 = 3;
	const ERRNO_NOERROR = 0;
	const ERRNO_ANY = 126;
	const ERRNO_GENERIC = 2;
	const ERRNO_TIMEOUT = 4;
	const ERRNO_ERROR_IN_REPLY = 8;
	const ERRNO_OID_NOT_INCREASING = 16;
	const ERRNO_OID_PARSING_ERROR = 32;
	const ERRNO_MULTIPLE_SET_QUERIES = 64;
	public function __construct ($version, $hostname, $community, $timeout = 1000000, $retries = 5) {}
	public function close () {}
	public function setSecurity ($sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $contextName, $contextEngineID) {}
	public function get ($object_id, $preserve_keys = FALSE) {}
	public function getnext ($object_id) {}
	public function walk ($object_id, $suffix_as_keys = FALSE, $max_repetitions, $non_repeaters) {}
	public function set ($object_id, $type, $value) {}
	public function getErrno () {}
	public function getError () {}
}
class SNMPException extends RuntimeException  {
    protected $message;
    protected $code;
}
function snmpget ($hostname, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmpgetnext ($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmpwalk ($hostname, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmprealwalk ($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmpwalkoid ($hostname, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmpset ($host, $community, $object_id, $type, $value, $timeout = 1000000, $retries = 5) {}
function snmp_get_quick_print () {}
function snmp_set_quick_print ($quick_print) {}
function snmp_set_enum_print ($enum_print) {}
function snmp_set_oid_output_format ($oid_format = SNMP_OID_OUTPUT_MODULE) {}
function snmp_set_oid_numeric_print ($oid_format) {}
function snmp2_get ($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp2_getnext ($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp2_walk ($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp2_real_walk ($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp2_set ($host, $community, $object_id, $type, $value, $timeout = 1000000, $retries = 5) {}
function snmp3_get ($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp3_getnext ($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp3_walk ($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}
function snmp3_real_walk ($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null) {}
function snmp3_set ($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout = 1000000, $retries = 5) {}
function snmp_set_valueretrieval ($method) {}
function snmp_get_valueretrieval () {}
function snmp_read_mib ($filename) {}
define ('SNMP_OID_OUTPUT_SUFFIX', 1);
define ('SNMP_OID_OUTPUT_MODULE', 2);
define ('SNMP_OID_OUTPUT_FULL', 3);
define ('SNMP_OID_OUTPUT_NUMERIC', 4);
define ('SNMP_OID_OUTPUT_UCD', 5);
define ('SNMP_OID_OUTPUT_NONE', 6);
define ('SNMP_VALUE_LIBRARY', 0);
define ('SNMP_VALUE_PLAIN', 1);
define ('SNMP_VALUE_OBJECT', 2);
define ('SNMP_BIT_STR', 3);
define ('SNMP_OCTET_STR', 4);
define ('SNMP_OPAQUE', 68);
define ('SNMP_NULL', 5);
define ('SNMP_OBJECT_ID', 6);
define ('SNMP_IPADDRESS', 64);
define ('SNMP_COUNTER', 66);
define ('SNMP_UNSIGNED', 66);
define ('SNMP_TIMETICKS', 67);
define ('SNMP_UINTEGER', 71);
define ('SNMP_INTEGER', 2);
define ('SNMP_COUNTER64', 70);
