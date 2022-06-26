<?php

namespace Lucinda\MVC\Response;

/**
 * Enum containing all possible HTTP statuses
 */
interface HttpStatus
{
    const CONTINUE = "100 Continue";
    const SWITCHING_PROTOCOLS = "101 Switching Protocols";
    const PROCESSING = "102 Processing";
    const OK = "200 OK";
    const CREATED = "201 Created";
    const ACCEPTED = "202 Accepted";
    const NON_AUTHORITATIVE_INFORMATION = "203 Non-authoritative Information";
    const NO_CONTENT = "204 No Content";
    const RESET_CONTENT = "205 Reset Content";
    const PARTIAL_CONTENT = "206 Partial Content";
    const MULTI_STATUS = "207 Multi-Status";
    const ALREADY_REPORTED = "208 Already Reported";
    const IM_USED = "226 IM Used";
    const MULTIPLE_CHOICES = "300 Multiple Choices";
    const MOVED_PERMANENTLY = "301 Moved Permanently";
    const FOUND = "302 Found";
    const SEE_OTHER = "303 See Other";
    const NOT_MODIFIED = "304 Not Modified";
    const USE_PROXY = "305 Use Proxy";
    const TEMPORARY_REDIRECT = "307 Temporary Redirect";
    const PERMANENT_REDIRECT = "308 Permanent Redirect";
    const BAD_REQUEST = "400 Bad Request";
    const UNAUTHORIZED = "401 Unauthorized";
    const PAYMENT_REQUIRED = "402 Payment Required";
    const FORBIDDEN = "403 Forbidden";
    const NOT_FOUND = "404 Not Found";
    const METHOD_NOT_ALLOWED = "405 Method Not Allowed";
    const NOT_ACCEPTABLE = "406 Not Acceptable";
    const PROXY_AUTHENTICATION_REQUIRED = "407 Proxy Authentication Required";
    const REQUEST_TIMEOUT = "408 Request Timeout";
    const CONFLICT = "409 Conflict";
    const GONE = "410 Gone";
    const LENGTH_REQUIRED = "411 Length Required";
    const PRECONDITION_FAILED = "412 Precondition Failed";
    const PAYLOAD_TOO_LARGE = "413 Payload Too Large";
    const REQUEST_URI_TOO_LONG = "414 Request-URI Too Long";
    const UNSUPPORTED_MEDIA_TYPE = "415 Unsupported Media Type";
    const REQUESTED_RANGE_NOT_SATISFIABLE = "416 Requested Range Not Satisfiable";
    const EXPECTATION_FAILED = "417 Expectation Failed";
    const IM_A_TEAPOT = "418 I'm a teapot";
    const MISDIRECTED_REQUEST = "421 Misdirected Request";
    const UNPROCESSABLE_ENTITY = "422 Unprocessable Entity";
    const LOCKED = "423 Locked";
    const FAILED_DEPENDENCY = "424 Failed Dependency";
    const UPGRADE_REQUIRED = "426 Upgrade Required";
    const PRECONDITION_REQUIRED = "428 Precondition Required";
    const TOO_MANY_REQUESTS = "429 Too Many Requests";
    const REQUEST_HEADER_FIELDS_TOO_LARGE = "431 Request Header Fields Too Large";
    const CONNECTION_CLOSED_WITHOUT_RESPONSE = "444 Connection Closed Without Response";
    const UNAVAILABLE_FOR_LEGAL_REASONS = "451 Unavailable For Legal Reasons";
    const CLIENT_CLOSED_REQUEST = "499 Client Closed Request";
    const INTERNAL_SERVER_ERROR = "500 Internal Server Error";
    const NOT_IMPLEMENTED = "501 Not Implemented";
    const BAD_GATEWAY = "502 Bad Gateway";
    const SERVICE_UNAVAILABLE = "503 Service Unavailable";
    const GATEWAY_TIMEOUT = "504 Gateway Timeout";
    const HTTP_VERSION_NOT_SUPPORTED = "505 HTTP Version Not Supported";
    const VARIANT_ALSO_NEGOTIATES = "506 Variant Also Negotiates";
    const INSUFFICIENT_STORAGE = "507 Insufficient Storage";
    const LOOP_DETECTED = "508 Loop Detected";
    const NOT_EXTENDED = "510 Not Extended";
    const NETWORK_AUTHENTICATION_REQUIRED = "511 Network Authentication Required";
    const NETWORK_CONNECT_TIMEOUT_ERROR = "599 Network Connect Timeout Error";
}