# ead_js_tat_cypress-basico

> Projeto referente a [este](https://www.udemy.com/course/testes-automatizados-com-cypress-basico) curso.

<!-- CI/C > Jobs > Status -->
[![pipeline status](https://gitlab.com/nenitf/ead_js_tat_cypress-basico/badges/main/pipeline.svg)](https://gitlab.com/nenitf/ead_js_tat_cypress-basico/commits/main)

## Setup inicial

```sh
npm i
```

## Execução dos testes

```sh
# usar cypress
npm run cy:open # interativo
# ou
npm run test # headless
```

## Git hooks

### pre-push

O script deve ser salvo como `./.git/hooks/pre-push`:

```sh
#!/bin/sh

# An example hook script to verify what is about to be pushed.  Called by "git
# push" after it has checked the remote status, but before anything has been
# pushed.  If this script exits with a non-zero status nothing will be pushed.
#
# This hook is called with the following parameters:
#
# $1 -- Name of the remote to which the push is being done
# $2 -- URL to which the push is being done
#
# If pushing without using a named remote those arguments will be equal.
#
# Information about the commits which are being pushed is supplied as lines to
# the standard input in the form:
#
#   <local ref> <local sha1> <remote ref> <remote sha1>
#
# This sample shows how to prevent push of commits where the log message starts
# with "WIP" (work in progress).

remote="$1"
url="$2"

z40=0000000000000000000000000000000000000000

while read local_ref local_sha remote_ref remote_sha
do
	if [ "$local_sha" = $z40 ]
	then
		# Handle delete
		:
	else
		if [ "$remote_sha" = $z40 ]
		then
			# New branch, examine all commits
			range="$local_sha"
		else
			# Update to existing branch, examine new commits
			range="$remote_sha..$local_sha"
		fi

        # Run the tests
        npm run test

        # Retrieve exit code
        is_test_passed=$?

        # Stop iterating if error
        if [ $is_test_passed -ne 0 ]
        then
            echo -e "Aborting push: Test failed for commit $commit,"\
                "with following error trace:\n"

            # break 2 # permite push mesmo com erro
            exit $is_test_passed # não permite push com erro
        fi
    fi
done

exit 0
```

> [Créditos](https://stackoverflow.com/a/61621713/9881278)
