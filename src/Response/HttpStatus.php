<?php

namespace Lucinda\MVC\Response;

/**
 * Enum containing all possible HTTP statuses
 */
enum HttpStatus: string
{
    case CONTINUE = "100 Continue";
    case SWITCHING_PROTOCOLS = "101 Switching Protocols";
    case PROCESSING = "102 Processing";
    case OK = "200 OK";
    case CREATED = "201 Created";
    case ACCEPTED = "202 Accepted";
    case NON_AUTHORITATIVE_INFORMATION = "203 Non-authoritative Information";
    case NO_CONTENT = "204 No Content";
    case RESET_CONTENT = "205 Reset Content";
    case PARTIAL_CONTENT = "206 Partial Content";
    case MULTI_STATUS = "207 Multi-Status";
    case ALREADY_REPORTED = "208 Already Reported";
    case IM_USED = "226 IM Used";
    case MULTIPLE_CHOICES = "300 Multiple Choices";
    case MOVED_PERMANENTLY = "301 Moved Permanently";
    case FOUND = "302 Found";
    case SEE_OTHER = "303 See Other";
    case NOT_MODIFIED = "304 Not Modified";
    case USE_PROXY = "305 Use Proxy";
    case TEMPORARY_REDIRECT = "307 Temporary Redirect";
    case PERMANENT_REDIRECT = "308 Permanent Redirect";
    case BAD_REQUEST = "400 Bad Request";
    case UNAUTHORIZED = "401 Unauthorized";
    case PAYMENT_REQUIRED = "402 Payment Required";
    case FORBIDDEN = "403 Forbidden";
    case NOT_FOUND = "404 Not Found";
    case METHOD_NOT_ALLOWED = "405 Method Not Allowed";
    case NOT_ACCEPTABLE = "406 Not Acceptable";
    case PROXY_AUTHENTICATION_REQUIRED = "407 Proxy Authentication Required";
    case REQUEST_TIMEOUT = "408 Request Timeout";
    case CONFLICT = "409 Conflict";
    case GONE = "410 Gone";
    case LENGTH_REQUIRED = "411 Length Required";
    case PRECONDITION_FAILED = "412 Precondition Failed";
    case PAYLOAD_TOO_LARGE = "413 Payload Too Large";
    case REQUEST_URI_TOO_LONG = "414 Request-URI Too Long";
    case UNSUPPORTED_MEDIA_TYPE = "415 Unsupported Media Type";
    case REQUESTED_RANGE_NOT_SATISFIABLE = "416 Requested Range Not Satisfiable";
    case EXPECTATION_FAILED = "417 Expectation Failed";
    case IM_A_TEAPOT = "418 I'm a teapot";
    case MISDIRECTED_REQUEST = "421 Misdirected Request";
    case UNPROCESSABLE_ENTITY = "422 Unprocessable Entity";
    case LOCKED = "423 Locked";
    case FAILED_DEPENDENCY = "424 Failed Dependency";
    case UPGRADE_REQUIRED = "426 Upgrade Required";
    case PRECONDITION_REQUIRED = "428 Precondition Required";
    case TOO_MANY_REQUESTS = "429 Too Many Requests";
    case REQUEST_HEADER_FIELDS_TOO_LARGE = "431 Request Header Fields Too Large";
    case CONNECTION_CLOSED_WITHOUT_RESPONSE = "444 Connection Closed Without Response";
    case UNAVAILABLE_FOR_LEGAL_REASONS = "451 Unavailable For Legal Reasons";
    case CLIENT_CLOSED_REQUEST = "499 Client Closed Request";
    case INTERNAL_SERVER_ERROR = "500 Internal Server Error";
    case NOT_IMPLEMENTED = "501 Not Implemented";
    case BAD_GATEWAY = "502 Bad Gateway";
    case SERVICE_UNAVAILABLE = "503 Service Unavailable";
    case GATEWAY_TIMEOUT = "504 Gateway Timeout";
    case HTTP_VERSION_NOT_SUPPORTED = "505 HTTP Version Not Supported";
    case VARIANT_ALSO_NEGOTIATES = "506 Variant Also Negotiates";
    case INSUFFICIENT_STORAGE = "507 Insufficient Storage";
    case LOOP_DETECTED = "508 Loop Detected";
    case NOT_EXTENDED = "510 Not Extended";
    case NETWORK_AUTHENTICATION_REQUIRED = "511 Network Authentication Required";
    case NETWORK_CONNECT_TIMEOUT_ERROR = "599 Network Connect Timeout Error";
}
