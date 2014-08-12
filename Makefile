BUILDDIR = build/artifacts

clean:
	-rm -rf $(BUILDDIR)/*

setup: clean
	curl https://getcomposer.org/installer | php
	composer.phar install
	curl http://phpdoc.org/phpDocumentor.phar -o ./build/phpdoc.phar
	chmod +x ./build/phpdoc.phar
	curl http://get.sensiolabs.org/php-cs-fixer.phar -o ./build/php-cs-fixer.phar
	chmod +x ./build/php-cs-fixer.phar
	cp phpunit.xml.dist phpunit.xml

cs:
	./build/php-cs-fixer.phar fix ./src

test:
	./vendor/bin/phpunit --coverage-html $(BUILDDIR)/coverage

view-coverage:
	open $(BUILDDIR)/coverage/index.html

docs:
	./build/phpdoc -d ./src -t $(BUILDDIR)/api

view-docs:
	open $(BUILDDIR)/api/index.html

