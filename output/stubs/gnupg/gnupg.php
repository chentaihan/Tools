<?php
define('GNUPG_SIG_MODE_NORMAL', 0);
define('GNUPG_SIG_MODE_DETACH', 0);
define('GNUPG_SIG_MODE_CLEAR', 0);
define('GNUPG_VALIDITY_UNKNOWN', 0);
define('GNUPG_VALIDITY_UNDEFINED', 0);
define('GNUPG_VALIDITY_NEVER', 0);
define('GNUPG_VALIDITY_MARGINAL', 0);
define('GNUPG_VALIDITY_FULL', 0);
define('GNUPG_VALIDITY_ULTIMATE', 0);
define('GNUPG_PROTOCOL_OpenPGP', 0);
define('GNUPG_PROTOCOL_CMS', 0);
define('GNUPG_SIGSUM_VALID', 0);
define('GNUPG_SIGSUM_GREEN', 0);
define('GNUPG_SIGSUM_RED', 0);
define('GNUPG_SIGSUM_KEY_REVOKED', 0);
define('GNUPG_SIGSUM_KEY_EXPIRED', 0);
define('GNUPG_SIGSUM_KEY_MISSING', 0);
define('GNUPG_SIGSUM_SIG_EXPIRED', 0);
define('GNUPG_SIGSUM_CRL_MISSING', 0);
define('GNUPG_SIGSUM_CRL_TOO_OLD', 0);
define('GNUPG_SIGSUM_BAD_POLICY', 0);
define('GNUPG_SIGSUM_SYS_ERROR', 0);
define('GNUPG_ERROR_WARNING', 0);
define('GNUPG_ERROR_EXCEPTION', 0);
define('GNUPG_ERROR_SILENT', 0);
class gnupg {
	function adddecryptkey($fingerprint, $passphrase)
	{
	}
	function verify($signed_text, $signature, &$plaintext = NULL)
	{
	}
	function addencryptkey($fingerprint)
	{
	}
	function addsignkey($fingerprint, $passphrase = NULL)
	{
	}
	function cleardecryptkeys()
	{
	}
	function clearencryptkeys()
	{
	}
	function clearsignkeys()
	{
	}
	function decrypt($text)
	{
	}
	function decryptverify($text, &$plaintext)
	{
	}
	function encrypt($plaintext)
	{
	}
	function encryptsign($plaintext)
	{
	}
	function export($fingerprint)
	{
	}
	function geterror()
	{
	}
	function getprotocol()
	{
	}
	function import($keydata)
	{
	}
	function init()
	{
	}
	function keyinfo($pattern)
	{
	}
	function setarmor($armor)
	{
	}
	function seterrormode($errormode)
	{
	}
	function setsignmode($signmode)
	{
	}
	function sign($plaintext)
	{
	}
}
