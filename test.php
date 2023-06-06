<?php

require_once __DIR__ . '/vendor/autoload.php';

use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;

$regex = '^a';

$lexer = new \PCRE\PCRELexer(InputStream::fromString($regex));
$tokens = new CommonTokenStream($lexer);
$parser = new \PCRE\PCREParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);
$tree = $parser->parse();

ParseTreeWalker::default()->walk(new \PCRE\PCREBaseListener(), $tree);
