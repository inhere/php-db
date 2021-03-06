<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-10-25
 * Time: 14:46
 */

namespace Inhere\Database\Schema;

/**
 * Class DBType
 * @package Inhere\Database\Schema
 * @link https://docs.google.com/document/d/168GnMgXb8afOby1n9iLQXzu-PWujs-HxTv5YbEvmu-4/edit
 */
class DBType
{
    // BOOLEAN
    const BOOLEAN = 'boolean';

    // CHARACTER
    const CHAR = 'char';
    const VARCHAR = 'varchar';

    // BIT
    const BIT = 'bit';
    const BIT_VARYING = 'bit varying';

    // EXACT NUMERIC
    const BIGINT = 'bigint';
    const INTEGER = 'integer';
    const SMALLINT = 'smallint';
    const DECIMAL = 'decimal';
    const NUMERIC = 'numeric';

    // APPROXIMATE NUMERIC
    const FLOAT = 'float';
    const REAL = 'real';
    const DOUBLE = 'double';

    // DATETIME
    const DATE = 'date';
    const TIME = 'time';
    const TIMESTAMP = 'timestamp';

    // INTERVAL
    const INTERVAL = 'interval';

    // LARGE OBJECTS
    const CHARACTER = 'character';
    const LARGE = 'large';
    const OBJECT_BINARY = 'objectbinary';
    const LARGE_OBJECT = 'large object';

    // Not SQL92 types but common
    const TEXT = 'text';
    const LONGTEXT = 'longtext';
    const TINYINT = 'tinyint';
    const DATETIME = 'datetime';

    /**
     * Property typeMapping.
     * @var  array
     */
    protected static $typeMapping = [];

    /**
     * DB type => ["Default Length", "Default Value", "PHP Type"]
     * @var  array
     */
    public static $typeDefinitions = [
        self::BOOLEAN => [1, 0, 'boolean'],
        self::CHAR => [255, '', 'string'],
        self::VARCHAR => [255, '', 'string'],
        self::TEXT => [null, '', 'string'],
        self::LONGTEXT => [null, '', 'string'],
        self::BIT => [1, 0, 'integer'],
        self::BIT_VARYING => [1, 0, 'integer'],
        self::BIGINT => [20, 0, 'integer'],
        self::INTEGER => [11, 0, 'integer'],
        self::SMALLINT => [6, 0, 'integer'],
        self::TINYINT => [4, 0, 'integer'],
        self::NUMERIC => [10, 0, 'integer'],
        self::DECIMAL => ['10,2', 0, 'float'],
        self::FLOAT => ['10,2', 0, 'float'],
        self::REAL => ['10,2', 0, 'float'],
        self::DOUBLE => ['10,2', 0, 'float'],
        self::DATE => [null, '0000-00-00', 'string'],
        self::TIME => [null, '00:00:00', 'string'],
        self::TIMESTAMP => [null, '0', 'string'],
        self::DATETIME => [null, '0000-00-00 00:00:00', 'string'],
    ];

}