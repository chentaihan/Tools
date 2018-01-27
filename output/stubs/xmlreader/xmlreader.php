<?php
class XMLReader  {
	const NONE = 0;
	const ELEMENT = 1;
	const ATTRIBUTE = 2;
	const TEXT = 3;
	const CDATA = 4;
	const ENTITY_REF = 5;
	const ENTITY = 6;
	const PI = 7;
	const COMMENT = 8;
	const DOC = 9;
	const DOC_TYPE = 10;
	const DOC_FRAGMENT = 11;
	const NOTATION = 12;
	const WHITESPACE = 13;
	const SIGNIFICANT_WHITESPACE = 14;
	const END_ELEMENT = 15;
	const END_ENTITY = 16;
	const XML_DECLARATION = 17;
	const LOADDTD = 1;
	const DEFAULTATTRS = 2;
	const VALIDATE = 3;
	const SUBST_ENTITIES = 4;
	public function close () {}
	public function getAttribute ($name) {}
	public function getAttributeNo ($index) {}
	public function getAttributeNs ($localName, $namespaceURI) {}
	public function getParserProperty ($property) {}
	public function isValid () {}
	public function lookupNamespace ($prefix) {}
	public function moveToAttributeNo ($index) {}
	public function moveToAttribute ($name) {}
	public function moveToAttributeNs ($localName, $namespaceURI) {}
	public function moveToElement () {}
	public function moveToFirstAttribute () {}
	public function moveToNextAttribute () {}
	public function open ($URI, $encoding = null, $options = 0) {}
	public function read () {}
	public function next ($localname = null) {}
	public function readInnerXml () {}
	public function readOuterXml () {}
	public function readString () {}
	public function setSchema ($filename) {}
	public function setParserProperty ($property, $value) {}
	public function setRelaxNGSchema ($filename) {}
	public function setRelaxNGSchemaSource ($source) {}
	public function XML ($source, $encoding = null, $options = 0) {}
	public function expand (DOMNode $basenode = null) {}
}
