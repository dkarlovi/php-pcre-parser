<?php

/*
 * Generated from PCRE.g4 by ANTLR 4.10.1
 */

namespace PCRE;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see PCREParser}.
 */
interface PCREListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see PCREParser::parse()}.
	 * @param $context The parse tree.
	 */
	public function enterParse(Context\ParseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::parse()}.
	 * @param $context The parse tree.
	 */
	public function exitParse(Context\ParseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::alternation()}.
	 * @param $context The parse tree.
	 */
	public function enterAlternation(Context\AlternationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::alternation()}.
	 * @param $context The parse tree.
	 */
	public function exitAlternation(Context\AlternationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function enterExpr(Context\ExprContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::expr()}.
	 * @param $context The parse tree.
	 */
	public function exitExpr(Context\ExprContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::element()}.
	 * @param $context The parse tree.
	 */
	public function enterElement(Context\ElementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::element()}.
	 * @param $context The parse tree.
	 */
	public function exitElement(Context\ElementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::quantifier()}.
	 * @param $context The parse tree.
	 */
	public function enterQuantifier(Context\QuantifierContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::quantifier()}.
	 * @param $context The parse tree.
	 */
	public function exitQuantifier(Context\QuantifierContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::quantifier_type()}.
	 * @param $context The parse tree.
	 */
	public function enterQuantifier_type(Context\Quantifier_typeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::quantifier_type()}.
	 * @param $context The parse tree.
	 */
	public function exitQuantifier_type(Context\Quantifier_typeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::character_class()}.
	 * @param $context The parse tree.
	 */
	public function enterCharacter_class(Context\Character_classContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::character_class()}.
	 * @param $context The parse tree.
	 */
	public function exitCharacter_class(Context\Character_classContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::backreference()}.
	 * @param $context The parse tree.
	 */
	public function enterBackreference(Context\BackreferenceContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::backreference()}.
	 * @param $context The parse tree.
	 */
	public function exitBackreference(Context\BackreferenceContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::backreference_or_octal()}.
	 * @param $context The parse tree.
	 */
	public function enterBackreference_or_octal(Context\Backreference_or_octalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::backreference_or_octal()}.
	 * @param $context The parse tree.
	 */
	public function exitBackreference_or_octal(Context\Backreference_or_octalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::capture()}.
	 * @param $context The parse tree.
	 */
	public function enterCapture(Context\CaptureContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::capture()}.
	 * @param $context The parse tree.
	 */
	public function exitCapture(Context\CaptureContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::non_capture()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_capture(Context\Non_captureContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::non_capture()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_capture(Context\Non_captureContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::comment()}.
	 * @param $context The parse tree.
	 */
	public function enterComment(Context\CommentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::comment()}.
	 * @param $context The parse tree.
	 */
	public function exitComment(Context\CommentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::option()}.
	 * @param $context The parse tree.
	 */
	public function enterOption(Context\OptionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::option()}.
	 * @param $context The parse tree.
	 */
	public function exitOption(Context\OptionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::option_flags()}.
	 * @param $context The parse tree.
	 */
	public function enterOption_flags(Context\Option_flagsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::option_flags()}.
	 * @param $context The parse tree.
	 */
	public function exitOption_flags(Context\Option_flagsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::option_flag()}.
	 * @param $context The parse tree.
	 */
	public function enterOption_flag(Context\Option_flagContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::option_flag()}.
	 * @param $context The parse tree.
	 */
	public function exitOption_flag(Context\Option_flagContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::look_around()}.
	 * @param $context The parse tree.
	 */
	public function enterLook_around(Context\Look_aroundContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::look_around()}.
	 * @param $context The parse tree.
	 */
	public function exitLook_around(Context\Look_aroundContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::subroutine_reference()}.
	 * @param $context The parse tree.
	 */
	public function enterSubroutine_reference(Context\Subroutine_referenceContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::subroutine_reference()}.
	 * @param $context The parse tree.
	 */
	public function exitSubroutine_reference(Context\Subroutine_referenceContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::conditional()}.
	 * @param $context The parse tree.
	 */
	public function enterConditional(Context\ConditionalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::conditional()}.
	 * @param $context The parse tree.
	 */
	public function exitConditional(Context\ConditionalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::backtrack_control()}.
	 * @param $context The parse tree.
	 */
	public function enterBacktrack_control(Context\Backtrack_controlContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::backtrack_control()}.
	 * @param $context The parse tree.
	 */
	public function exitBacktrack_control(Context\Backtrack_controlContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::newline_convention()}.
	 * @param $context The parse tree.
	 */
	public function enterNewline_convention(Context\Newline_conventionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::newline_convention()}.
	 * @param $context The parse tree.
	 */
	public function exitNewline_convention(Context\Newline_conventionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::callout()}.
	 * @param $context The parse tree.
	 */
	public function enterCallout(Context\CalloutContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::callout()}.
	 * @param $context The parse tree.
	 */
	public function exitCallout(Context\CalloutContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function enterAtom(Context\AtomContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::atom()}.
	 * @param $context The parse tree.
	 */
	public function exitAtom(Context\AtomContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::cc_atom()}.
	 * @param $context The parse tree.
	 */
	public function enterCc_atom(Context\Cc_atomContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::cc_atom()}.
	 * @param $context The parse tree.
	 */
	public function exitCc_atom(Context\Cc_atomContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::shared_atom()}.
	 * @param $context The parse tree.
	 */
	public function enterShared_atom(Context\Shared_atomContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::shared_atom()}.
	 * @param $context The parse tree.
	 */
	public function exitShared_atom(Context\Shared_atomContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::cc_literal()}.
	 * @param $context The parse tree.
	 */
	public function enterCc_literal(Context\Cc_literalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::cc_literal()}.
	 * @param $context The parse tree.
	 */
	public function exitCc_literal(Context\Cc_literalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::shared_literal()}.
	 * @param $context The parse tree.
	 */
	public function enterShared_literal(Context\Shared_literalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::shared_literal()}.
	 * @param $context The parse tree.
	 */
	public function exitShared_literal(Context\Shared_literalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::number()}.
	 * @param $context The parse tree.
	 */
	public function enterNumber(Context\NumberContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::number()}.
	 * @param $context The parse tree.
	 */
	public function exitNumber(Context\NumberContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::octal_char()}.
	 * @param $context The parse tree.
	 */
	public function enterOctal_char(Context\Octal_charContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::octal_char()}.
	 * @param $context The parse tree.
	 */
	public function exitOctal_char(Context\Octal_charContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::octal_digit()}.
	 * @param $context The parse tree.
	 */
	public function enterOctal_digit(Context\Octal_digitContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::octal_digit()}.
	 * @param $context The parse tree.
	 */
	public function exitOctal_digit(Context\Octal_digitContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::digits()}.
	 * @param $context The parse tree.
	 */
	public function enterDigits(Context\DigitsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::digits()}.
	 * @param $context The parse tree.
	 */
	public function exitDigits(Context\DigitsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::digit()}.
	 * @param $context The parse tree.
	 */
	public function enterDigit(Context\DigitContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::digit()}.
	 * @param $context The parse tree.
	 */
	public function exitDigit(Context\DigitContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::name()}.
	 * @param $context The parse tree.
	 */
	public function enterName(Context\NameContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::name()}.
	 * @param $context The parse tree.
	 */
	public function exitName(Context\NameContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::alpha_nums()}.
	 * @param $context The parse tree.
	 */
	public function enterAlpha_nums(Context\Alpha_numsContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::alpha_nums()}.
	 * @param $context The parse tree.
	 */
	public function exitAlpha_nums(Context\Alpha_numsContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::non_close_parens()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_close_parens(Context\Non_close_parensContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::non_close_parens()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_close_parens(Context\Non_close_parensContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::non_close_paren()}.
	 * @param $context The parse tree.
	 */
	public function enterNon_close_paren(Context\Non_close_parenContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::non_close_paren()}.
	 * @param $context The parse tree.
	 */
	public function exitNon_close_paren(Context\Non_close_parenContext $context): void;
	/**
	 * Enter a parse tree produced by {@see PCREParser::letter()}.
	 * @param $context The parse tree.
	 */
	public function enterLetter(Context\LetterContext $context): void;
	/**
	 * Exit a parse tree produced by {@see PCREParser::letter()}.
	 * @param $context The parse tree.
	 */
	public function exitLetter(Context\LetterContext $context): void;
}