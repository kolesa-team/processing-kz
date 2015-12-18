#!/bin/bash
PATH_ROOT="$( cd "$( dirname "${BASH_SOURCE[0]}" )/.." && pwd )"
PATH_PHPCS="$PATH_ROOT/vendor/bin/phpcs"

if hash php-cs-fixer 2>/dev/null; then
  php-cs-fixer fix "$PATH_ROOT/src/" --level=psr2 --fixers=unused_use,ordered_use,phpdoc_params,concat_with_spaces,-concat_without_spaces
fi

if [ -x "$PATH_PHPCS" ]; then
  $PATH_PHPCS --standard="$PATH_ROOT/data/cs-ruleset.xml" --encoding=utf-8 "$PATH_ROOT/src/"
fi
