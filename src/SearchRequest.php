<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: search.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>SearchRequest</code>
 */
class SearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string query = 1;</code>
     */
    private $query = '';
    /**
     * Generated from protobuf field <code>int32 page_number = 2;</code>
     */
    private $page_number = 0;
    /**
     * Generated from protobuf field <code>int32 result_per_page = 3;</code>
     */
    private $result_per_page = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $query
     *     @type int $page_number
     *     @type int $result_per_page
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Search::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 page_number = 2;</code>
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * Generated from protobuf field <code>int32 page_number = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 result_per_page = 3;</code>
     * @return int
     */
    public function getResultPerPage()
    {
        return $this->result_per_page;
    }

    /**
     * Generated from protobuf field <code>int32 result_per_page = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setResultPerPage($var)
    {
        GPBUtil::checkInt32($var);
        $this->result_per_page = $var;

        return $this;
    }

}

