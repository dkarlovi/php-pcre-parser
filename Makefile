build:
	antlr4 -package PCRE -o src -Dlanguage=PHP PCRE.g4
.PHONY: build
