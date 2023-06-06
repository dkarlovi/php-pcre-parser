<?php

require_once __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;

$regex = '^a(b|c)$';

$lexer = new \PCRE\PCRELexer(InputStream::fromString($regex));
$tokens = new CommonTokenStream($lexer);
$parser = new \PCRE\PCREParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);
$tree = $parser->parse();

ParseTreeWalker::default()->walk(new class extends \PCRE\PCREBaseListener {
    public function enterElement(\PCRE\Context\ElementContext $context): void
    {
        echo $context->getText() . PHP_EOL;
    }
}, $tree);
