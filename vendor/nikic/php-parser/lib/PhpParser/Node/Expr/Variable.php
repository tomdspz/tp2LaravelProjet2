PK     ��Wر�y  y  K 	 tp2LaravelProjet/vendor/nikic/php-parser/lib/PhpParser/Node/Expr/Print_.phpUT �T{e<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class Print_ extends Expr
{
    /** @var Expr Expression */
    public $expr;

    /**
     * Constructs an print() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $expr, array $attributes = []) {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }

    public function getSubNodeNames() : array {
       