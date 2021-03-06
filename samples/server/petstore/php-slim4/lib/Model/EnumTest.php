<?php

/**
 * OpenAPI Petstore
 * PHP version 7.2
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\Interfaces\ModelInterface;

/**
 * EnumTest
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class EnumTest implements ModelInterface
{
    private const MODEL_SCHEMA = <<<'SCHEMA'
{
  "required" : [ "enum_string_required" ],
  "type" : "object",
  "properties" : {
    "enum_string" : {
      "type" : "string",
      "enum" : [ "UPPER", "lower", "" ]
    },
    "enum_string_required" : {
      "type" : "string",
      "enum" : [ "UPPER", "lower", "" ]
    },
    "enum_integer" : {
      "type" : "integer",
      "format" : "int32",
      "enum" : [ 1, -1 ]
    },
    "enum_number" : {
      "type" : "number",
      "format" : "double",
      "enum" : [ 1.1, -1.2 ]
    },
    "outerEnum" : {
      "$ref" : "#/components/schemas/OuterEnum"
    }
  }
}
SCHEMA;

    /** @var string $enumString */
    private $enumString;

    /** @var string $enumStringRequired */
    private $enumStringRequired;

    /** @var int $enumInteger */
    private $enumInteger;

    /** @var double $enumNumber */
    private $enumNumber;

    /** @var \OpenAPIServer\Model\OuterEnum $outerEnum */
    private $outerEnum;

    /**
     * Returns model schema.
     *
     * @param bool $assoc When TRUE, returned objects will be converted into associative arrays. Default FALSE.
     *
     * @return array
     */
    public static function getOpenApiSchema($assoc = false)
    {
        return json_decode(static::MODEL_SCHEMA, $assoc);
    }
}
