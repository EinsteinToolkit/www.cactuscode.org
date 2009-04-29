# This makefile requires latex and bibtool to be installed on the
# system.

# This list defines the sections (keywords) we have.  This list must
# be consistent with the keywords in the bibtex file, and with the
# include statements in the tex and html files.
SECTIONS = cactuscode webpage numrel computerscience performance applications studenttheses cstheses nrtheses

all: cactus-publications.pdf cactus-publications.html

cactus-publications.pdf: cactus-publications.tex cactus-publications.bib $(SECTIONS:%=citations-%.bibitems)
	pdflatex cactus-publications
	pdflatex cactus-publications

cactus-publications.html: $(SECTIONS:%=citations-%.html-updated)

.PRECIOUS: $(SECTIONS:%=citations-%.tex)
citations-%.tex: citations.template
	sed -e 's/STATUS/$*/g' citations.template > $@

.PRECIOUS: $(SECTIONS:%=citations-%.bib)
citations-%.bib: cactus-publications.bib
#	bibtool -q -- 'select.by.string{keyword "$*"}' -- 'sort{on}' -- 'sort.reverse{on}' -- 'sort.format{%N(receiveddate)}' < cactus-publications.bib > $@
	bibtool -q -- 'select{keyword "$*"}' -- 'sort{on}' -- 'sort.reverse{on}' -- 'sort.format{%N(receiveddate)}' < cactus-publications.bib > $@

# this produces also %.aux and %.bbl
.PRECIOUS: $(SECTIONS:%=citations-%.pdf)
citations-%.pdf: citations-%.tex citations-%.bib
	pdflatex citations-$*
	bibtex citations-$*
	pdflatex citations-$*
	pdflatex citations-$*

citations-%.bibitems: citations-%.pdf
	cat citations-$*.bbl | grep -v thebibliography | sed -e 's/bibitem/blurb/' > $@

# http://www.spinellis.gr/sw/textproc/bib2xhtml/
# Sorted alphabetically:
# ./bib2xhtml -r -s empty -u $*.aux cactus-publications.html
# ./bib2xhtml -s unsort -u $*.aux cactus-publications.html
# ./bib2xhtml -s unsortlist -u $*.aux cactus-publications.html
citations-%.html-updated: citations-%.pdf
	./bib2xhtml -s unsortlist citations-$*.aux cactus-publications.html
	: > $@

EMPTY :=
SPACE := $(EMPTY) $(EMPTY)
check:
	bibtool -q -- 'select.non{status "$(subst $(SPACE),\|,$(SECTIONS))"}' < cactus-publications.bib

clean:
	$(RM) cactus-publications.{aux,bbl,blg,log,out,pdf,toc}
	$(RM) $(SECTIONS:%=citations-%.*)

.PHONY: all check clean
